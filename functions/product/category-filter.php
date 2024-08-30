<?php
include('../../config/db.php'); 

$categories = $_POST['categories'];
$page = isset($_POST['page']) ? (int)$_POST['page'] : 1;
$limit = 9; 
$offset = ($page - 1) * $limit;

$categoryFilter = "";
if (!empty($categories)) {
    $categoryFilter = "AND category_id IN (" . implode(',', array_map('intval', $categories)) . ")";
}

$totalQuery = "SELECT COUNT(*) as total FROM products WHERE status = 'A' $categoryFilter";
$totalResult = $conn->query($totalQuery);
$totalProducts = $totalResult->fetch_assoc()['total'];

$productsQuery = "SELECT * FROM products WHERE status = 'A' $categoryFilter LIMIT $limit OFFSET $offset";
$productsResult = $conn->query($productsQuery);

$html = '';
while ($productRow = $productsResult->fetch_assoc()) {
    $html .= '<div class="col-sm-6 col-xl-4">';
    $html .= '    <div class="product-card">';
    $html .= '        <span class="product-badge">new</span>';
    $html .= '        <div class="product-img">';
    $html .= '            <img src="admin/product_images/' . htmlspecialchars($productRow['master_image']) . '" alt="' . htmlspecialchars($productRow['name']) . '">';
    $html .= '        </div>';
    $html .= '        <div class="product-content">';
    $html .= '            <h6>' . htmlspecialchars($productRow['name']) . '</h6>';
    $html .= '            <ul class="d-flex align-items-center gap-2">';
    $html .= '                <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>';
    $html .= '                <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>';
    $html .= '                <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>';
    $html .= '                <li><i class="fa-solid fa-star" style="color: #FFB82E;"></i></li>';
    $html .= '                <li><i class="fa-solid fa-star" style="color: #D9D9D9;"></i></li>';
    $html .= '            </ul>';
    $html .= '            <div class="d-flex justify-content-between align-items-center gap-3 gap-lg-4">';
    $html .= '                <h4>$' . htmlspecialchars($productRow['price']) . '</h4>';
    $html .= '                <a href="#" class=""><img src="assets/images/shopping-bag.svg" alt=""></a>';
    $html .= '            </div>';
    $html .= '        </div>';
    $html .= '    </div>';
    $html .= '</div>';
}

$totalPages = ceil($totalProducts / $limit);
$pagination = '';
for ($i = 1; $i <= $totalPages; $i++) {
    $active = $page == $i ? 'active' : '';
    $pagination .= '<li class="page-item"><a class="page-link ' . $active . '" href="javascript:void(0);" onclick="goToPage(' . $i . ')">' . $i . '</a></li>';
}

echo json_encode(['html' => $html, 'pagination' => $pagination]);
?>
