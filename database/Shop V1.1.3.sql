DROP DATABASE Shop;
CREATE DATABASE Shop;
USE Shop;

CREATE TABLE admin (
 id INT(11) NOT NULL,
 username VARCHAR(45) DEFAULT NULL,
 password VARCHAR(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE brands (
  brand_id INT(100) NOT NULL,
  brand_title TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE cart (
  id INT(10) NOT NULL,
  p_id INT(10) NOT NULL,
  date_order VARCHAR(250) NOT NULL,
  user_id INT(10) NOT NULL,
  user_name VARCHAR(100) NOT NULL,
  user_address VARCHAR(100) NOT NULL,
  user_phone VARCHAR(10) NOT NULL,
  user_email  VARCHAR(300) NOT NULL, 
  product_title VARCHAR(200) NOT NULL,
  product_image VARCHAR(200) NOT NULL,
  qty INT(10) NOT NULL,
  price INT(10) NOT NULL,
  total_amt INT(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE categories (
  cat_id INT(100) NOT NULL,
  cat_title TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE products (
  product_id INT(100) NOT NULL,
  product_cat INT(100) NOT NULL,
  product_brand INT(100) NOT NULL,
  product_title VARCHAR(255) NOT NULL,
  product_price INT(100) NOT NULL,
  product_desc TEXT NOT NULL,
  product_image TEXT NOT NULL,
  product_keywords TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE user_info (
  user_id INT(10) NOT NULL,
  first_name VARCHAR(100) NOT NULL,
  last_name VARCHAR(100) NOT NULL,
  email VARCHAR(300) NOT NULL,
  password VARCHAR(300) NOT NULL,
  mobile VARCHAR(10) NOT NULL,
  address1 VARCHAR(300) NOT NULL,
  address2 VARCHAR(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE cart_has_products (
	cart_id INT(10) NOT NULL,
    products_product_id INT(100) NOT NULL
);

CREATE TABLE Slider(
	Slider_ID INT(100) NOT NULL,
    URL VARCHAR(255) NOT NULL
);

CREATE TABLE Guest
(
	ID INT(100),
    Pro_ID INT(100),
    Pro_name VARCHAR(255),
    Date_order VARCHAR(255),
    Product_image VARCHAR(255),
    Qty INT(100),
    Price INT(100),
    Total_amt INT(100)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE history 
(
	ID INT(100),
    User_id INT(100),
    User_name VARCHAR(255),
    Total INT(100),
    Status VARCHAR(255),
    Time VARCHAR(255)

)ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO Slider VALUES 
(1,'slide1.png'),
(2,'slide2.png'),
(3,'slide3.png'),
(4,'slide1.png');

CREATE TABLE contacts (
  id int(11) NOT NULL,
  name varchar(50) NOT NULL,
  email varchar(100) NOT NULL,
  title varchar(45) DEFAULT NULL,
  contents text,
  created datetime DEFAULT NULL,
  status int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO contacts (id, name, email, title, contents, created, status) VALUES
(1, 'ha', 'ha@gmail.com', 'ha', 'Thắc mắc về giá của sản phẩm ', '2016-07-21 15:43:45', 1),
(2, 'adad', 'a@gmail.com', 'ádad', 'Thắc mắc về giá của sản phẩm ', '2016-07-21 15:44:03', 1),
(8, 'chien', 'chiennt@student.passerellesnumeriques.org', 'I have problem about service of shop', '	I have buy some product \r\n                        ', '2016-08-10 18:11:47', 0);

ALTER TABLE brands
  ADD PRIMARY KEY (brand_id);

ALTER TABLE cart
  ADD PRIMARY KEY (id);

ALTER TABLE categories
  ADD PRIMARY KEY (cat_id);

ALTER TABLE products
  ADD PRIMARY KEY (product_id);

ALTER TABLE user_info
  ADD PRIMARY KEY (user_id);

ALTER TABLE Slider
  ADD PRIMARY KEY (Slider_ID);
  
ALTER TABLE Guest
  ADD PRIMARY KEY (ID);
  
ALTER TABLE history
  ADD PRIMARY KEY (ID);

ALTER TABLE brands
  MODIFY brand_id INT(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE cart
  MODIFY id INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  
ALTER TABLE categories
  MODIFY cat_id INT(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE products
  MODIFY product_id INT(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

ALTER TABLE user_info
  MODIFY user_id INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
  
ALTER TABLE Slider
  MODIFY Slider_ID INT(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  
ALTER TABLE Guest
  MODIFY ID INT(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
ALTER TABLE history
  MODIFY ID INT(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE products ADD FOREIGN KEY(product_cat) REFERENCES categories(cat_id);
ALTER TABLE products ADD FOREIGN KEY(product_cat) REFERENCES brands(brand_id);
ALTER TABLE cart ADD FOREIGN KEY(user_id) REFERENCES user_info(user_id);
ALTER TABLE cart_has_products ADD FOREIGN KEY(cart_id) REFERENCES cart(id);
ALTER TABLE cart_has_products ADD FOREIGN KEY(products_product_id) REFERENCES products(product_id);
ALTER TABLE cart_has_products ADD PRIMARY KEY(cart_id,products_product_id);


  
INSERT INTO brands (brand_id, brand_title) VALUES
(1, 'Charles & Krith'),
(2, 'Zara'),
(3, 'H&M'),
(4, 'Forever21'),
(5, 'Newlook'),
(6, 'Asos'),
(7, 'Miumiu');

INSERT INTO categories (cat_id, cat_title) VALUES
(1, 'Túi sách'),
(2, 'Balo'),
(3, 'Ví cho nam'),
(4, 'Ví cho nữ'),
(5, 'Thời trang trẻ');

INSERT INTO user_info (user_id, first_name, last_name, email, password, mobile, address1, address2) VALUES
(1, 'Cu', 'Nguyen', 'cunguyen@gmail.com', 'cunguyen', '0904765341', 'Đà Nẵng', 'Quảng Bình'),
(2, 'Linh', 'Ngo', 'linhngo@gmail.com', 'linh123', '0904765341', 'Đà Nẵng', 'Quảng Bình');



INSERT INTO products (product_id, product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) VALUES
(1, 4, 2, 'Sản phẩm cao cấp', 5000, 'Chất liệu bền mau hỏng', '3PGVwy_simg_b5529c_250x250_maxb.jpg', 'vi da nu'),
(2, 2, 3, 'Balo nhí', 25000, 'balo nhi', '7LpYCO_simg_569a19_570-570-56-92_cropf_simg_b5529c_250x250_maxb.jpg', 'balo nhi'),
(3, 2, 3, 'Rabbit Bag', 30000, 'Rabbit bag', '57ab25e591164.png', 'Balo bag rabbit'),
(4, 2, 3, 'Cute Bag', 32000, 'cute bag 2017', '2016-Candy-Color-Mini-Backpack-For-Girls-Cute-Mouse-Ear-Bag-High-Quality-Women-Leather-Backpack.jpg_640x640.jpg', 'cutr bag'),
(5, 1, 2, 'Mini Bag', 10000, 'Mini Bag', '3204470609249919193.jpg', 'mini bag'),
(6, 2, 1, 'Style Bag', 35000, 'Style Bag', 'AMK3Xf_simg_b5529c_250x250_maxb.jpg', 'style bag'),
(7, 2, 1, 'Balo xinh cho bé', 50000, 'Balo xinh cho baby', 'ba-lo-250x250.jpg', 'balo xinh cho be baby'),
(8, 3, 4, 'Ví da V1', 40000, 'Vi da V1', 'cd8af4c0-56fd-11e7-8335-5b8ad15777b5.jpg', 'vi da v1'),
(9, 1, 3, 'Túi xách E1', 12000, 'E1 tui xach bag', 'charles&krith1.jpg', 'tui xach e1'),
(10, 1, 6, 'Charles & Krith Red Bag', 1000, 'Charles Krith Bag', 'charles&krith2.jpg', 'charles & krith red bag '),
(11, 1, 6, 'Charles & Krith Mini Bag', 1200, 'Charles Krith Bag', 'charles&krith3.jpg', 'charles & krith mini bag'),
(12, 1, 6, 'Charles & Krith Miu Bag', 1500, 'Charles Krith Bag', 'charles&krith4.jpg', 'charles & krith miu bag'),
(13, 1, 6, 'Pink Bag', 1200, 'Pink bag', 'charles&krith5.png', 'pink bag mau hong'),
(14, 1, 6, 'Charles & Krith C6', 1400, 'Charles Krith Bag', 'charles&krith6.jpg', 'charles & krith c6'),
(15, 1, 6, 'Charles & Krith C7', 1500, 'Charles Krith Bag', 'charles&krith7.jpg', 'charles & krith c7'),
(16, 1, 6, 'Charles & Krith C8', 600, 'Charles Krith Bag', 'charles&krith8.jpg', 'charles & krith c8'),
(17, 4, 6, 'Túi xách V3', 1000, 'Tui xach V3', 'dd4933_simg_b5529c_250x250_maxb.jpg', 'charles & krith v3'),
(19, 1, 6, 'Túi xách V4', 3000, 'Tui xach V4', 'ec7AZd_simg_b5529c_250x250_maxb.jpg', 'charles & krith v4'),
(20, 4, 6, 'Ví da Pro', 1600, 'Vi da Pro', 'gf9bpo_simg_b5529c_250x250_maxb.png', 'vi da pro'),
(21, 4, 6, 'Ví xách tay', 800, 'Vi xach tay', 'gLxnqZ_simg_b5529c_250x250_maxb.jpg', 'vi xach tay'),
(22, 4, 6, 'Meo Meo Ví', 1300, 'Meo meo vi cute', 'gsbk76_simg_b5529c_250x250_maxb.jpg', 'meo meo vi'),
(23, 1, 6, 'Túi xách tay', 1900, 'Tui xach tay', 'H&M1.jpg', 'tui xach tay'),
(24, 4, 6, 'Ví Ki Ki', 700, 'Vi ki ki beautyful', 'hikh.jpg', 'vi ki ki'),
(25, 4, 6, 'Bóp da', 750, 'Bop da', 'hRfIFq_simg_f3eed6_539-539-77-0_cropf_simg_b5529c_250x250_maxb.png', 'bop da'),
(26, 4, 6, 'Sim max', 650, 'Sim max bag beau', 'HryJTc_simg_b5529c_250x250_maxb.jpg', 'sim max'),
(27, 1, 6, 'Túi da M4', 690, 'Tui da M4', 'iXdkou_simg_b5529c_250x250_maxb.jpg', 'tui da m4'),
(32, 4, 0, 'Túi da B5', 2500, 'Tui da B5', 'Krlp4i_simg_92c814_522-522-0-0_cropf_simg_b5529c_250x250_maxb.jpg', 'tui da b5'),
(33, 5, 2, 'Ví cho bé', 35000, 'Vi cho be', 'kXyd11_simg_b5529c_250x250_maxb.jpg', 'vi cho be'),
(34, 2, 4, 'Túi cá tính', 1000, 'Tui cho baby', 'OJ8VQ2_simg_b5529c_250x250_maxb.jpg', 'tui ca tinh'),
(35, 2, 0, 'Balo pink', 6000, 'Balo pink', 'OrS62W_simg_b5529c_250x250_maxb (1).jpg', 'balo pink mau hong'),
(36, 2, 5, 'Pink Backpack', 1500, 'Pink Backppack', 'OrS62W_simg_b5529c_250x250_maxb.JPG', 'pink back pack backpack mau hong'),
(37, 4, 5, 'Wallet for woman', 20000, 'Wallet for woman', 'P8Xu6h_simg_b5529c_250x250_maxb.jpg', 'wallet for man'),
(38, 4, 4, 'Wallet pink girl', 3500, 'Wallet pink girl', 'pPWB77_simg_b5529c_250x250_maxb.jpg', 'wallet for girl mau hong'),
(39, 4, 5, 'Yellow', 2500, 'Yellow', 'preview_vi-nu-hermes-mot-dai-fullbox-.jpg', 'yellow'),
(40, 2, 6, 'Lovely Bag', 3000, 'Lovely Bag', 'product-image-204291675_1024x1024.jpg', 'love lovely bag'),
(45, 4, 2, 'Pink Wallet', 10000, 'Pink wallet', 'no.jpg', 'pink wallet mau hong'),
(46, 3, 2, 'Wallet for man', 10000, 'Wallet for man', 'no1.jpg', 'wallet for man'),
(47, 4, 7, 'Ví da - Màu tím', 10000, 'Vi da mau tim', 'no2.jpg', 'vi da mau tim purple'),
(48, 5, 7, 'Style Bag', 10000, 'Style Bag', 'zara1.jpg', 'style bag'),
(49, 5, 2, 'Zara apple B1', 10000, 'Zara apple B1', 'zara2.jpg', 'zara apple b1'),
(50, 5, 2, 'MiuMiu Gold', 10000, 'Miumiu Cold', 'zara3.jpg', 'miumiu gold'),
(51, 5, 2, 'Asos - Túi xách', 10000, 'Asos - tui xach beau', 'zara4.jpg', 'asos - tui xach'),
(52, 5, 2, 'H&M (Black)', 10000, 'HM H&M Black Bag', 'zara5.jpg', 'h m h&m balck'),
(53, 5, 2, 'Forever21 (Green)', 10000, 'Forever21 Bag beau', 'zara6.jpg', 'forever21'),
(54, 5, 2, 'Village - Newlook', 10000, 'Old bag beau', 'zara7.jpg', 'village newlook'),
(55, 5, 2, 'Tech-Bag (H&M)', 10000, 'Tech - Bag Beau', 'zara8.jpg', 'technology tech bag hm');

INSERT INTO admin (id, username, password) VALUES
(1, 'linhIT98', '009b35b6a859335651d384702f545a04');