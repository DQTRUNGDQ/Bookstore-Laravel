//MỞ RA NỘI DUNG CON

function toggleSubmenu(submenu) {
    var submenu = document.getElementById(submenu);
    var icon = document.getElementById("icon");
    if (submenu.style.display === "none") {
        submenu.style.display = "block";
         rotateIcon(icon, 180);
    } else {
        submenu.style.display = "none";
         rotateIcon(icon, 0); 
    }
}

function rotateIcon(icon, rotation) {
    icon.style.transform = 'rotate(' + rotation + 'deg)';
}

// ẨN ĐI THANH SIDEBAR

function toggleSidebar() {
    var sidebar = document.getElementById('sidebar');
    var header = document.querySelector('.header');
    var content = document.querySelector('.ct-categories');

    sidebar.classList.toggle('sidebar-hidden');
    header.classList.toggle('header-toggle')
    content.classList.toggle('content-align');
}

// HIỂN THỊ RA NỘI DUNG KHI CLICK VÀO


function changeActive(element, content) {
    // Loại bỏ class "active" từ tất cả các phần tử có class "text-nav"
    var textNavs = document.querySelectorAll('.remove');
    textNavs.forEach(function(nav) {
    nav.classList.remove('active');
    });

    // Thêm class "active" vào phần tử được click
    element.classList.add('active');

    // Hiển thị nội dung tương ứng
    showContent(content);

    // Cập nhật breadcrumb
    updateBreadcrumb(content);
}

function showContent(selectedContentId) {
    // Ẩn tất cả các phần nội dung
    document.querySelectorAll('.content').forEach(content => {
        content.style.display = 'none';
    });
    
    // Hiển thị phần nội dung được chọn
    var selectedContent = document.getElementById(selectedContentId);
    if (selectedContent) {
        selectedContent.style.display = 'block';
    }
}

function updateBreadcrumb(content) {
            // Lấy thẻ span của breadcrumb
            var breadcrumbSpan = document.getElementById('breadcrumb-span');

            // Cập nhật nội dung breadcrumb tùy thuộc vào nội dung được chọn
            if (breadcrumbSpan) {
                switch (content) {
                    case 'homepage':
                        breadcrumbSpan.innerHTML = '<span style="color:#6261cc; text-decoration:underline">Trang chủ</span> / Tổng quan';
                        break;
                    case 'categories':
                        breadcrumbSpan.innerHTML = '<span style="color:#6261cc; text-decoration:underline">Trang chủ</span> <span>/ Thể loại sách</span>';
                        break;
                    // Thêm các case khác nếu cần thiết
                    default:
                        breadcrumbSpan.innerHTML = '<span style="color:#6261cc; text-decoration:underline">Trang chủ</span>';
                        break;
                }
            }
        }
