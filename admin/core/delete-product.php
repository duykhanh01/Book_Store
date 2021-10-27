<?php

include('../config/db_connect.php');
if (!isset($_POST['id'])) header('Location: ../404.php');

$id = $_POST['id'];
$sql = "DELETE FROM products where pr_id = '$id'";
$res = mysqli_query($conn, $sql);
if ($res) {

    $output = "";
    $query = "SELECT  category.c_name as c_name, pr_id, pr_code, pr_name, pr_category, pr_status,pr_date, pr_number, pr_price, pr_discount, pr_img, pr_desc from products, category where category.c_id = pr_category";
    $result = mysqli_query($conn, $query);
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($books as $key => $book) {
        $index = $key + 1;
        $class = $book['pr_status'] == 0  ? 'color-red' :  'color-green';
        $status = $book['pr_status'] == 0  ? 'Private' :  'Public';
        $output .= "
               <tr class='table__row'>
                    <td class='table__td'>
                        " . $index . "
                    </td>
                    <td class='d-none d-lg-table-cell table__td'><span class='text-grey'>" . $book['pr_code'] . "</span>
                    </td>
                    <td class='table__td'>" . $book['pr_name'] . "</td>
                    <td class='table__td'><span class='text-grey'>" . $book['c_name'] . "</span>
                    </td>
                    <td class='table__td'><span>" . $book['pr_price'] . "</span>
                    </td>
                    <td class='d-none d-lg-table-cell table__td'><span class='text-grey'>" . $book['pr_date'] . "</span>
                    </td>
                    <td class='d-none d-sm-table-cell table__td'>
                        <div class='table__status'><span class='table__status-icon " . $class . "'></span>
                            " . $status . "</div>
                    </td>
                    <td class='table__td table__actions'>
                        <div class='items-more'>
                            <button class='items-more__button'>
                                <svg class='icon-icon-more'>
                                    <use xlink:href='#icon-more'></use>
                                </svg>
                            </button>
                            <div class='dropdown-items dropdown-items--right'>
                                <div class='dropdown-items__container'>
                                    <ul class='dropdown-items__list'>
                                        <li class='dropdown-items__item'><a href='product-details.php?id=" . $book['pr_id'] . "' class='dropdown-items__link'><span class='dropdown-items__link-icon'>
                                                    <svg class='icon-icon-view'>
                                                        <use xlink:href='#icon-view'></use>
                                                    </svg></span>Details</a>
                                        </li>
                                        <li class='dropdown-items__item'><a value=" . $book['pr_id'] . " class='dropdown-items__link delete-product'><span class='dropdown-items__link-icon'>
                                                    <svg class='icon-icon-trash'>
                                                        <use xlink:href='#icon-trash'></use>
                                                    </svg></span>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
        
        ";
    }
    echo $output;
} else {
    header('Location: ../404.php');
}
