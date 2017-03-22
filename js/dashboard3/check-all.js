/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function checkAll(className, obj) {
    // Duyet qua cac checkbox co class = className
    // Tra ve cac phan tu o dang mang, bat dau tu vi tri 0
    var items = document.getElementsByClassName(className);
    
    if (obj.checked == true) // da duoc chon
    {
        for (i = 0; i < items.length; i++) {
            items[i].checked = true;
        }
    }
    else {
        for (i = 0; i < items.length; i++) {
            items[i].checked = false;
        }
    }
}