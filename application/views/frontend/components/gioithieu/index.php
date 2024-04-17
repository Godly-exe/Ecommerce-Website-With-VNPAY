<?php 
	$user = $this->session->userdata('sessionKhachHang');
?>
<?php echo form_open( base_url()."gioi-thieu"); ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }


        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #501614;
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        
    </style>
</head>
<body>

    <header>
        <h1>Phong cách Đỏ - Trang Giới thiệu</h1>
    </header>

    <main>
        <img src="red-style-logo.png" alt="Logo Phong cách Đỏ">

        <h2>Về chúng tôi</h2>
        <p>Phong cách Đỏ là địa điểm mua sắm hàng công nghệ hàng đầu, chúng tôi mang đến những sản phẩm chất lượng với phong cách thiết kế độc đáo và hiện đại.</p>

        <h2>Sứ mệnh của chúng tôi</h2>
        <p>Chúng tôi cam kết cung cấp các sản phẩm công nghệ hàng đầu, đảm bảo chất lượng và dịch vụ tận tâm để mang lại trải nghiệm mua sắm tốt nhất cho khách hàng.</p>
    </main>

    <footer>
        <p>&copy; 2023 Phong cách Đỏ - Đỏ phong cách</p>
    </footer>
</style>
