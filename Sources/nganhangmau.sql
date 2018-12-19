-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 02:41 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nganhangmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `maAd` int(11) NOT NULL,
  `hoTen` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tendangnhap` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matKhau` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bandoc`
--

CREATE TABLE `bandoc` (
  `maTin` int(11) NOT NULL,
  `tieuDe` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tieuDeKhongDau` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tomTat` text COLLATE utf8mb4_unicode_ci,
  `noiDung` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bandoc`
--

INSERT INTO `bandoc` (`maTin`, `tieuDe`, `tieuDeKhongDau`, `tomTat`, `noiDung`) VALUES
(1, 'Thông tin cơ bản về máu', 'thong-tin-co-ban-ve-mau', NULL, '<h1>Thông tin cơ bản về máu</h1>\r\n      <p><strong>1.Máu là gì</strong></p>\r\n      <p>Máu là một mô lỏng, lưu thông trong hệ thống tuần hoàn của cơ thể.</p>\r\n      <p><strong>2.Lượng máu có trong cơ thể người</strong></p>\r\n      <p>- Lượng máu ở người khỏe mạnh tương đối ổn định và phụ thuộc vào nhiều yếu tố như tuổi, giới, cân nặng... Lượng máu tỷ lệ thuận với trọng lượng cơ thể, mỗi người có trung bình từ 70 - 80ml máu/kg cân nặng. Lượng máu tương đối ổn định nhờ cơ chế điều hòa giữa lượng máu sinh ra ở tủy xương và lượng máu bị mất đi hàng ngày. Tuy vậy, nếu mất một lượng máu quá lớn hoặc chức năng sinh máu của tủy xương bị rối loạn thì lượng máu trong cơ thể mất ổn định.</p>\r\n      <p>- Lượng máu liên quan trực tiếp đến hoạt động của cơ thể như khi mất nhiều mồ hôi, hoặc mất nước thì lượng máu có thể giảm do bị cô đặc. Trong những trường hợp bệnh lý như thiếu máu do mất máu, do suy tủy... lượng máu trong cơ thể sẽ bị thay đổi tùy thuộc tình trạng bệnh lý. Nếu mất trên 1/3 tổng lượng máu thì cơ thể sẽ bị rối loạn chức năng của nhiều cơ quan, có thể gây sốc, thậm chí bị tử vong.</p>\r\n      <p><strong>3. Các thành phần của máu và chức năng?</strong></p>\r\n      <p>Máu gồm hai phần chính: các tế bào máu và huyết tương.</p>\r\n      <p><strong><i>Các tế bào máu bao gồm:</i></strong></p>\r\n      <p>- Hồng cầu: chiếm số lượng nhiều nhất, chứa huyết sắc tố (chất làm cho máu có màu đỏ). Hồng cầu làm nhiệm vụ vận chuyển khí ôxy (O2) từ phổi đến các mô và nhận khí cacbonic (CO2) từ các mô tới phổi để đào thải. Đời sống trung bình của hồng cầu là 120 ngày; hồng cầu già bị tiêu hủy chủ yếu ở lách và gan. Tủy xương sinh các hồng cầu mới để thay thế và duy trì lượng hồng cầu ổn định trong cơ thể.</p>\r\n      <p>- Bạch cầu: Bạch cầu có chức năng bảo vệ cơ thể bằng cách phát hiện và tiêu diệt các \"vật lạ” gây bệnh. Có nhiều loại bạch cầu khác nhau với đời sống từ một tuần đến vài tháng: có loại làm nhiệm vụ thực bào tức là \"ăn” các \"vật lạ”, có loại làm nhiệm vụ \"nhớ” để nếu lần sau \"vật lạ” này xâm nhập sẽ bị phát hiện và nhanh chóng cơ thể sinh ra một lượng lớn bạch cầu tiêu diệt chúng, có loại tiết ra các kháng thể lưu hành trong máu để bảo vệ cơ thể... Bạch cầu được sinh ra tại tủy xương. Ngoài việc lưu hành trong máu là chính, có một lượng khá lớn bạch cầu cư trú ở các mô của cơ thể để làm nhiệm vụ bảo vệ.</p>\r\n      <p>- Tiểu cầu: Là những mảnh tế bào rất nhỏ tham gia vào chức năng cầm máu bằng cách tạo các cục máu đông bịt các vết thương ở thành mạch máu. Ngoài ra, tiểu cầu còn làm cho thành mạch mềm mại, dẻo dai nhờ chức năng tiểu cầu làm \"trẻ hóa” tế bào nội mạc. Đời sống của tiểu cầu khoảng 7 – 10 ngày. Cũng giống như hồng cầu và bạch cầu, tủy xương là nơi sinh ra tiểu cầu.</p>\r\n      <p><strong><i>Huyết tương</i></strong>: là phần dung dịch, có màu vàng, thành phần chủ yếu là nước; ngoài ra còn còn có thành phần khác như: đạm, mỡ, đường, vitamin, muối khoáng, các men…</p>\r\n      <p>Huyết tương thay đổi theo tình trạng sinh lý trong cơ thể, ví dụ sau bữa ăn huyết tương có màu đục và trở nên trong, màu vàng chanh sau khi ăn vài giờ. Nếu đơn vị máu có huyết tương \"đục” sẽ không được sử dụng vì có thể gây sốc, gây dị ứng cho người bệnh; vì vậy, người hiến máu chỉ nên ăn nhẹ, ăn ít đạm, ít mỡ trước khi hiến máu.</p>\r\n      <strong>4. Nhóm máu</strong>\r\n      <p>- Máu gồm các tế bào và huyết tương; sự có mặt của những thành phần kháng nguyên trên bề mặt hồng cầu và kháng thể trong huyết tương sẽ quyết định sự khác nhau hay giống hau giữa các cá thể, nên sẽ quy định nhóm máu tương ứng.</p>\r\n      <p>- Có nhiều hệ nhóm máu khác nhau như hệ ABO, hệ Rh, hệ Kell, hệ MN... trong đó quan trọng và phổ biến hơn cả là hệ nhóm máu ABO và hệ nhóm máu Rh.</p>\r\n      <p> - Hệ nhóm máu ABO gồm 4 nhóm máu là A, B, O và AB với tỷ lệ phân bố trong cộng đồng khác nhau ở từng chủng tộc. Ở Việt Nam, tỷ lệ này là: nhóm O khoảng 42,1%, nhóm B khoảng 30,1%, nhóm A khoảng 21,2% và nhóm AB khoảng 6,6%.</p>\r\n      <p>- Nguyên tắc truyền máu là không được để kháng nguyên và kháng thể tương ứng gặp nhau trong cơ thể. Do vậy, việc xác định nhóm máu chính xác trước khi truyền là rất quan trọng. Nhóm máu O được gọi là nhóm máu \"cho phổ thông” tức là có thể cho được tất cả các nhóm nhưng chỉ nhận được máu cùng nhóm O. Nhóm máu AB là nhóm máu \"nhận phổ thông” tức là nhận được tất cả các nhóm nhưng chỉ cho được người cùng nhóm máu AB. Người có nhóm máu A có thể máu nhóm O hoặc A, người có nhóm B có thể nhận máu nhóm O hoặc B.</p>\r\n      <p>- Hệ nhóm máu Rh: có hai loại nhóm máu là Rh dương và Rh âm. Người có nhóm máu Rh âm không nhận máu từ nhóm Rh dương (ngoại trừ lần đầu truyền máu vì chưa có kháng thể chống Rh dương). Ở Việt Nam, tỷ lệ người có nhóm máu Rh âm chiếm tỷ lệ rất thấp, khoảng 0,04% - 0,07% dân số nên họ được coi là người có nhóm máu hiếm. Trong khi đó, ở Châu Âu, Châu Mỹ, Châu Úc... tỷ lệ này cao hơn nhiều, chiếm khoảng 15% - 40% dân số.</p>'),
(2, 'Hiến máu có hại không?', 'hien-mau-co-hai-khong', NULL, '<h1><strong>Hiến máu có hại không?</strong></h1>\r\n      <p><strong>Hiến máu có hại không?</strong></p>\r\n      <p>Hiến máu không chỉ cứu sống được người nhận mà còn có ích đối với cả người cho vì nhờ vậy cũng cải thiện được sức khỏe của mình.</p>\r\n      <p>Trong phong trào hiến máu, người ta chỉ nói đến lợi ích, không nói đến cái hại. Tôi muốn biết cả lợi lẫn hại của việc hiến máu?</p>\r\n      <p><strong><i>Trả lời:</i></strong></p>\r\n      <p>Không thể có gì thay thế cho máu người, và chỉ có máu của người cho người. Rất may là hiến máu không chỉ cứu sống được người nhận mà còn có ích đối với cả người cho vì nhờ vậy cũng cải thiện được sức khỏe của mình.</p>\r\n      <p>Những lợi ích của việc hiến máu là:</p>\r\n      <p><strong>- Giảm sắt</strong></p>\r\n      <p>Trong các tế bào hồng cầu chứa 70% sắt trong cơ thể con người. Hầu hết mọi người có thừa sắt trong máu của mình, thừa nhiều có hại hơn lợi. Khi cho máu loại bỏ được một lượng sắt dư thừa tích lũy trong cơ thể.</p>\r\n      <p>Nếu trong máu vượt quá một lượng sắt nhất định có thể kích thích sự hình thành các gốc tự do trong cơ thể, gây ra thay đổi tế bào, phá vỡ chức năng tế bào bình thường và làm tăng nguy cơ một số bệnh mạn tính, như bệnh tim và ung thư. Điều này có nhiều khả năng trở thành chuyện đáng lo ngại  cho nam giới lớn tuổi và phụ nữ sau mãn kinh.</p>\r\n      <p>Cơ thể của phụ nữ trong độ tuổi sinh nở tự loại bớt sắt thừa thông qua kinh nguyệt. Trung tâm Miller –Keystone tiến hành  nghiên cứu dài hạn trên một triệu người ở Bắc Âu đã chỉ ra rằng những người hiến máu thường xuyên có nguy cơ mắc bệnh tim và ung thư thấp vì hiến máu là cách loại bỏ một số chất sắt dư thừa. Không cần lo lắng về việc mất quá nhiều sắt từ việc hiến máu vì mức độ sắt của bạn được kiểm tra mỗi lần trước khi cho máu, hoặc bằng cách kiểm tra nồng độ hemoglobin hoặc các tế bào hồng cầu của người cho.</p>\r\n      <p><strong>- Bổ sung máu</strong></p>\r\n      <p>Hiến máu sẽ giúp chức năng cơ thể của bạn hoạt động hiệu quả hơn bằng cách bổ sung thêm nguồn cấp máu thường xuyên. Thông thường, cơ thể con người thay thế máu trong vòng 48 giờ sau khi cho, và tất cả các tế bào hồng cầu mất đi sẽ hoàn toàn được thay thế trong vòng 4 - 8 tuần. Quá trình bổ sung có thể giúp cơ thể làm mới hệ thống và giữ cho cơ thể khỏe mạnh, cũng như làm việc hiệu quả hơn.</p>\r\n      <p><strong>- Được kiểm tra sức khỏe</strong></p>\r\n      <p>Bao giờ cũng được kiểm tra sức khỏe khi đến hiến máu như: cân nặng, đo huyết áp, đo nhịp tim và nhiệt độ. Đây cũng là dịp để đánh giá chức năng cơ thể hoạt động ra sao và nếu có bệnh thì phát hiện kịp thời. Nếu bạn đăng ký hiến máu thường xuyên như 2 tháng một lần, bạn sẽ có 6 lần kiểm tra sức khỏe trong một năm.</p>\r\n      <p><strong>- Tình cảm</strong></p>\r\n      <p>Khi cho máu bạn đã có niềm vui khi biết rằng không chỉ mình được cải thiện cuộc sống mà có khả năng cứu người khác.</p>\r\n      <p><strong>- Lợi ích khác</strong></p>\r\n      <p>Nhiều nghiên cứu cho thấy những ai thường xuyên hiến máu giảm nguy cơ phát triển bệnh tim và ung thư gan, phổi, ruột, dạ dày và cổ họng.</p>\r\n      <p><i>Vậy hiến máu có hại gì?</i></p>\r\n      <p>Nếu như hiến máu có một cái hại gì đó cho bản thân bạn thì Cơ quan tiếp nhận máu - vì chức năng bảo về sức khoẻ cho bản thân bạn - sẽ không đồng ý lấy máu của bạn, dù bạn thiết tha yêu cầu. Các quy định rất chặt chẽ để sao cho không gây hại gì cho người hiến máu.</p>'),
(3, 'Quyền lợi của người hiến máu', 'quyen-loi-cua-nguoi-hien-mmau', NULL, '<h1>Quyền lợi và chế độ đối với người hiến máu tình nguyện</h1>\r\n<p><strong>Ai có thể tham gia hiến máu?</strong></p>\r\n<p>-Tất cả mọi người từ 18 - 60 tuổi, thực sự tình nguyện hiến máu của mình để cứu chữa người bệnh.</p>\r\n<p>-Cân nặng ít nhất là 42kg đối với phụ nữ, 45kg đối với nam giới. Lượng máu hiến mỗi lần không quá 9ml/kg cân nặng và không quá 500ml mỗi lần.</p>\r\n<p>-Không bị nhiễm hoặc không có các hành vi lây nhiễm HIV và các bệnh lây nhiễm qua đường truyền máu khác.\r\n-Thời gian giữa 2 lần hiến máu là 12 tuần đối với cả Nam và Nữ.\r\n-Có giấy tờ tùy thân.</p>\r\n \r\n<p><strong>Ai là người không nên hiến máu?</strong></p>\r\n<p>-Người đã nhiễm hoặc đã thực hiện hành vi có nguy cơ nhiễm HIV.</p>\r\n<p>-Người đã nhiễm viêm gan B, viêm gan C, và các vius lây qua đường truyền máu.</p>\r\n<p>-Người có các bệnh mãn tính: tim mạch, huyết áp, hô hấp, dạ dày…</p>\r\n \r\n<p><strong>Máu của tôi sẽ được làm những xét nghiệm gì?</strong></p>\r\n<p>-Tất cả những đơn vị máu thu được sẽ được kiểm tra nhóm máu (hệ ABO, hệ Rh), HIV, virus viêm gan B, virus viêm gan C, giang mai, sốt rét.</p>\r\n<p>-Bạn sẽ được thông báo kết quả, được giữ kín và được tư vấn (miễn phí) khi phát hiện ra các bệnh nhiễm trùng nói trên.</p>\r\n \r\n<p><strong>Máu gồm những thành phần và chức năng gì?</strong></p>\r\n<p>Máu là một chất lỏng lưu thông trong các mạch máu của cơ thể, gồm nhiều thành phần, mỗi thành phần làm nhiệm vụ khác nhau:</p>\r\n<p>-Hồng cầu làm nhiệm vụ chính là vận chuyển oxy;</p>\r\n<p>-Bạch cầu làm nhiệm vụ bảo vệ cơ thể;</p>\r\n<p>-Tiểu cầu tham gia vào quá trình đông cầm máu.</p>\r\n<p>-Huyết tương: gồm nhiều thành phần khác nhau: kháng thể, các yếu tố đông máu, các chất dinh dưỡng...</p>\r\n \r\n<p><strong>Tại sao lại có nhiều người cần phải được truyền máu?</strong></p>\r\n<p>-Mỗi giờ có hàng trăm người bệnh cần phải được truyền máu vì :</p>\r\n<p>-Bị mất máu do chấn thương, tai nạn, thảm hoạ, xuất huyết tiêu hoá...</p>\r\n<p>-Do bị các bệnh gây thiếu máu, chảy máu: ung thư máu, suy tuỷ xương, máu khó đông...</p>\r\n<p>-Các phương pháp điều trị hiện đại cần truyền nhiều máu: phẫu thuật tim mạch, ghép tạng...</p>\r\n \r\n<p><strong>Nhu cầu máu điều trị ở nước ta hiện nay?</strong></p>\r\n<p>-Mỗi năm nước ta cần khoảng 1.800.000 đơn vị máu điều trị.</p>\r\n<p>-Máu cần cho điều trị hằng ngày, cho cấp cứu, cho dự phòng các thảm họa, tai nạn cần truyền máu với số lượng lớn.</p>\r\n<p>-Hiện tại chúng ta đã đáp ứng được khoảng 54% nhu cầu máu cho điều trị.</p>\r\n \r\n<p><strong>Tại sao khi tham gia hiến máu lại cần phải có giấy CMND?</strong></p>\r\n<p>Mỗi đơn vị máu đều phải có hồ sơ, trong đó có các thông tin về người hiến máu. Theo quy định,  đây là một thủ tục cần thiết trong quy trình hiến máu để đảm bảo tính xác thực thông tin về người hiến máu.</p>\r\n \r\n<p><strong>Hiến máu nhân đạo có hại đến sức khoẻ không?</strong></p>\r\n<p>Hiến máu theo hướng dẫn của thầy thuốc không có hại cho sức khỏe. Điều đó đã được chứng minh bằng các cơ sở khoa học và cơ sở thực tế:</p>\r\n \r\n<p><i>Cơ sở khoa học:</i></p>\r\n<p>-Máu có nhiều thành phần, mỗi thành phần chỉ có đời sống nhất định và luôn luôn được đổi mới hằng ngày. Ví dụ: Hồng cầu sống được 120 ngày, huyết tương thường xuyên được thay thế và đổi mới.  Cơ sở khoa học cho thấy, nếu mỗi lần hiến dưới 1/10 lượng máu trong cơ thể thì không có hại đến sức khỏe.</p>\r\n<p>-Nhiều công trình nghiên cứu đã chứng minh rằng, sau khi hiến máu, các chỉ số máu có thay đổi chút ít nhưng vẫn nằm trong giới hạn sinh lý bình thường không hề gây ảnh hưởng đến các hoạt động thường ngày của cơ thể.</p>\r\n \r\n<p><i>Cơ sở thực tế:</i></p>\r\n<p>-Thực tế đã có hàng triệu người hiến máu nhiều lần mà sức khỏe vẫn hoàn toàn tốt. Trên thế giới có người hiến máu trên 400 lần. Ở Việt Nam, người hiến máu nhiều lần nhất đã hiến gần 100 lần, sức khỏe hoàn toàn tốt.</p>\r\n<p>-Như vậy, mỗi người nếu thấy sức khoẻ tốt, không có các bệnh lây nhiễm qua đường truyền máu, đạt tiêu chuẩn hiến máu thì có thể hiến máu từ 3-4 lần trong một năm, vừa không ảnh hưởng xấu đến sức khoẻ của bản thân, vừa đảm bảo máu có chất lượng tốt, an toàn cho người bệnh.</p>\r\n \r\n<p><strong>QUYỀN LỢI ĐỐI VỚI NGƯỜI HIẾN MÁU TÌNH NGUYỆN</strong></p>\r\n<p>Quyền lợi và chế độ đối với người hiến máu tình nguyện theo Thông tư số 05/2017/TT-BYT  Quy định giá tối đa và chi phí phục vụ cho việc xác định giá một đơn vị máu toàn phần, chế phẩm máu đạt tiêu chuẩn:</p>\r\n\r\n<p>-Được khám và tư vấn sức khỏe miễn phí.</p>\r\n<p>-Được kiểm tra và thông báo kết quả các xét nghiệm máu (hoàn toàn bí mật): nhóm máu, HIV, virut viêm gan B, virut viêm gan C, giang mai, sốt rét. Trong trường hợp người hiến máu có nhiễm hoặc nghi ngờ các mầm bệnh này thì sẽ được Bác sỹ mời đến để tư vấn sức khỏe.</p>\r\n<p>-Được bồi dưỡng và chăm sóc theo các quy định hiện hành:</p>\r\n<p>+ Phục vụ ăn nhẹ tại chỗ: tương đương 30.000 đồng.</p>\r\n<p>+ Hỗ trợ chi phí đi lại (bằng tiền mặt): 50.000 đồng.</p>\r\n\r\n<p>+ Lựa chọn nhận quà tặng bằng hiện vật hoặc bằng các dịch vụ khám bệnh, chữa bệnh có giá trị như sau:</p>\r\n\r\n<p>Một đơn vị máu thể tích 250 ml: 100.000 đồng;</p>\r\n\r\n<p>Một đơn vị máu thể tích 350 ml: 150.000 đồng;</p>\r\n\r\n<p>Một đơn vị máu thể tích 450 ml: 180.000 đồng.</p>\r\n\r\n \r\n<p>+ Được cấp giấy chứng nhận hiến máu tình nguyện của Ban chỉ đạo hiến máu nhân đạo Tỉnh, Thành phố. Ngoài giá trị về mặt tôn vinh, giấy chứng nhận hiến máu có giá trị bồi hoàn máu, số lượng máu được bồi hoàn lại tối đa bằng lượng máu người hiến máu đã hiến. Giấy Chứng nhận này có giá trị tại các bệnh viện, các cơ sở y tế công lập trên toàn quốc.</p>'),
(4, 'Căn dặn của thầy thuốc đối với người hiến máu', 'can-dan-cua-thay-thuoc-doi-voi-nguoi-hien-mau', NULL, '<h1>Căn dặn của thầy thuốc với người hiến máu</h1><p>Hiến máu theo hướng dẫn của bác sỹ có lợi cho sức khỏe. Tuy nhiên, một số trường hợp ở người hiến máu có thể có những biểu hiện không mong muốn xảy ra. Đó là những phản ứng bình thường của cơ thể, có thể xử lý đơn giản sẽ nhanh chóng qua đi. </p>\r\n<p><strong >Trước khi hiến máu phải làm gì?</strong> </p>\r\n<p>-   Đêm hôm trước ngày hiến máu không thức quá khuya, không uống rượu bia, nên ăn nhẹ trước khi hiến máu, không ăn chất có nhiều đường, mỡ trước khi hiến máu.</p>\r\n<p>-   Mang giấy CMND, hoặc giấy tờ tùy thân khi đi hiến máu. </p>\r\n<p><strong ></strong></p>\r\n<p> <strong >Nếu phát hiện chảy máu tại chỗ: </strong></p>\r\n<p><strong ></strong>-   Giơ cao tay.</p>\r\n<p> -   Lấy tay kia ấn nhẹ vào miếng bông hoặc băng dính.</p>\r\n<p> -   Thay miếng bông và băng dính khác .  </p>\r\n<p><strong >Nếu xuất hiện bầm tím tại chỗ: </strong></p>\r\n<p>-   02 ngày đầu sau hiến máu: Chườm lạnh tại chỗ. </p>\r\n<p>-   Những ngày sau: Chườm nóng 2 - 4 lần/ ngày. </p>\r\n<p><strong ></strong></p>\r\n<p> <strong >Sau khi hiến máu Nên:</strong>  </p>\r\n<p>- Chỉ dời điểm hiến máu khi thực sự thoải mái và được sự đồng ý của nhân viên y tế. </p>\r\n<p>- Nếu cảm thấy chóng mặt, mệt, buồn nôn: nên nằm nghỉ 10 – 15 phút. </p>\r\n<p>- Uống nhiều nước sau khi hiến máu. </p>\r\n<p>- Để miếng băng dính sau ít nhất 4-6 giờ mới lấy đi.  </p>\r\n<p>- Trong 2-3 ngày đầu sau hiến máu nên sinh hoạt nhẹ nhàng, nghỉ ngơi nhiều hơn bình thường.</p>\r\n<p><strong ></strong></p>\r\n<p> <strong >Tránh: </strong></p>\r\n<p><strong ></strong>- Uống rượu, bia trong ngày đầu sau khi hiến máu. </p>\r\n<p>- Làm việc gắng sức (leo núi, tập tạ …) trong hai ngày đầu. </p>\r\n<p>- Các hoạt động gắng sức, các trò chơi mang tính đối kháng đòi hỏi tốn nhiều thể lực: đá bóng, tập tạ, không leo trèo cao… không thức quá khuya, không uống rượu bia.  </p>\r\n<p><strong > Chế độ ăn, sinh hoạt sau khi hiến máu Nên:</strong> </p>\r\n<p>-   Giữ chế độ ăn uống, sinh hoạt bình thường.</p>\r\n<p>-   Tăng cường sử dụng các chất dinh dưỡng bổ máu: thịt, gan, trứng, sữa … </p>\r\n<p>-  Dùng thêm các thuốc bổ máu nếu có thể.</p>\r\n<p> </p>\r\n<p><strong >QUY TRÌNH THAM GIA HIẾN MÁU</strong> </p>\r\n<p><strong >Bước 1: </strong>Đăng ký tham gia hiến máu (có mẫu kèm theo) </p>\r\n<p>-    Người hiến máu dành thời gian tìm hiểu thêm thông tin về hiến máu qua tài liệu tại điểm hiến máu hoặc trao đổi với các tuyên truyền viên, nhân viên y tế; xuất trình giấy tờ tùy thân và nhận Phiếu đăng ký hiến máu, sau đó hoàn tất phiếu theo hướng dẫn.</p>\r\n<p><strong ></strong></p>\r\n<p><strong >Bước 2:</strong> Khám và tư vấn sức khoẻ </p>\r\n<p>-    Các Bác sỹ sẽ tư vấn để khai thác các tiền sử bệnh lý liên quan tới sức khỏe của quý vị, giải đáp những băn khoăn, lo lắng của quý vị về việc hiến máu nhằm khẳng định rằng quý vị đã có hiểu biết đầy đủ về việc hiến máu và hoàn toàn thoải mái, tự nguyện tham gia hiến máu. </p>\r\n<p>-    Tiếp theo, bác sỹ sẽ khai thác các yếu tố hành vi nguy cơ lây nhiễm các bệnh qua đường truyền máu  như HIV, viêm gan B, viêm gan C, giang mai, sốt rét cũng như các bệnh có thể lây nhiễm qua đường truyền máu. </p>\r\n<p>-    Tiếp, các bác sỹ sẽ tiến hành khám sức khỏe cho quý vị để đảm bảo rằng, quý vị hoàn toàn khỏe mạnh, tình nguyện hiến máu và không có nguy cơ lây nhiễm bệnh cho người nhận máu. </p>\r\n<p> <strong >Bước 3:</strong> Xét nghiệm máu </p>\r\n<p>-    Quý vị sẽ được làm các xét nghiệm kiểm tra trước hiến máu, bao gồm: </p>\r\n<p>-    Huyết sắc tố: là thành phần quan trọng của hồng cầu, xét nghiệm này nhằm đảm bảo máu của quý vị đủ chất lượng theo quy định để truyền cho người bệnh. Đạt tiêu chuẩn hiến máu khi lượng huyết sắc tố đạt trên 120gam/lít. </p>\r\n<p>-    Xét nghiệm virus viêm gan B: bằng kít xét nghiệm nhanh, để đảm bảo những người có vi rút viêm gan B không tham gia hiến máu.</p>\r\n<p> <strong >Bước 4:</strong> Hiến máu </p>\r\n<p>-    Mỗi người sẽ dành trung bình 5 phút cho việc hiến máu với lượng máu hiến mỗi lần là 250, 350 hoặc 450ml.  </p>\r\n<p><strong >Bước 5: </strong>Nghỉ và nhận giấy chứng nhận sau hiến máu </p>\r\n<p>-    Sau hiến máu, Quý vị sẽ phải nghỉ tại chỗ ít nhất 10 phút, quý vị sẽ được phục vụ ăn nhẹ và được khuyến cáo uống nhiều nước sau khi hiến máu. Quý vị chỉ nên dời điểm hiến máu khi cảm thấy hoàn toản thoải mái. </p>\r\n<p><strong >Các hình thức tổ chức hiến máu</strong> </p>\r\n<p>1.    Tổ chức hiến máu tại cơ quan đơn vị. </p>\r\n<p>2.    Tổ chức hiến máu tại các xe lấy máu chuyên dụng. </p>\r\n<p>3.    Tổ chức hiến máu tại các điểm hiến máu cố định.</p>\r\n<p> </p>\r\n<p><strong >QUY TRÌNH SẢN XUẤT, BẢO QUẢN VÀ PHÂN PHỐI MÁU</strong></p>\r\n<p><strong >Bước 1. </strong>Thu gom máu vào các túi máu tiêu chuẩn và vận chuyển về Ngân hàng máu để tiến hành sàng lọc, sản xuất, bảo quản và phân phối máu. </p>\r\n<p><strong ></strong></p>\r\n<p><strong >Bước 2.</strong> Xét nghiệm đơn vị máu sau hiến: </p>\r\n<p>- Xét nghiệm nhóm máu, được tiến hành định nhóm 02 hệ nhóm máu: </p>\r\n<p>+ Hệ nhóm máu ABO: xác định nhóm máu A,B,O và AB </p>\r\n<p>+ Hệ nhóm máu Rh+: xác định nhóm máu Rh+ và Rh- </p>\r\n<p>- Xét nghiệm sàng lọc các Virut lây truyền qua đường truyền máu </p>\r\n<p>+ Xét nghiệm sàng lọc virut viêm gan B trong máu </p>\r\n<p>+ Xét nghiệm sàng lọc virut viêm gan C trong máu </p>\r\n<p>+ Xét nghiệm sàng lọc virut HIV trong máu </p>\r\n<p>+ Xét nghiệm sàng lọc ký sinh trùng sốt rét trong máu </p>\r\n<p>+ Xét nghiệm phát hiện vi khuẩn giang mai trong máu. </p>\r\n<p> <strong >Bước 3.</strong> Các xét nghiệm máu ở bước 2 cho kết quả Âm tính, máu sẽ được đưa vào sản xuất  thành các sản phẩm máu gồm: </p>\r\n<p>-    Khối Hồng cầu </p>\r\n<p>-    Khối Tiểu cầu </p>\r\n<p>-    Khối Huyết tương </p>\r\n<p>-    Khối Bạch cầu </p>\r\n<p>Việc sản xuất, sàng lọc các chế phẩm máu sẽ giúp cho việc truyền máu an toàn hơn, tránh tình trạng truyền máu không cần thiết, đảm bảo tiêu chí \"người bệnh thiếu gì truyền nấy”.</p>\r\n<p> <strong > Bước 4.</strong> Sau khi máu được sản xuất  thành các chế phẩm sẽ được đưa vào bảo quản theo tiêu chuẩn cụ thể: </p>\r\n<p>-    Khối Hồng cầu bảo quản ở nhiệt độ: từ 2oC đến 6oC. </p>\r\n<p>-    Khối Tiểu cầu bảo quản ở nhiệt độ: từ 20 – 22oC </p>\r\n<p>-    Khối Bạch cầu bảo quản ở nhiệt độ thường khoảng 24oC </p>\r\n<p>-    Khối Huyết tương bảo quản ở nhiệt độ: từ -18oC đến -24oC</p>\r\n<p> <strong >Bước 5. </strong>Phân phối máu </p>\r\n<p>Hiện nay, cả nước có 4 Trung tâm Truyền máu chính là:Trung tâm Truyền máu Hà Nội,Trung tâm Truyền máu Miền Trung, Trung tâm Truyền máu Chợ Rẫy, Trung tâm Truyền máu Cần Thơ.</p>\r\n<p>Tại khu vực phía Bắc, Trung tâm Truyền máu Hà Nội (Viện Huyết học – Truyền máu Trung ương) chịu trách nhiệm cung cấp máu cho 120 bệnh viện tại 16 tỉnh /thành tại khu vực phía Bắc</p>');

-- --------------------------------------------------------

--
-- Table structure for table `benhvien`
--

CREATE TABLE `benhvien` (
  `maBV` int(11) NOT NULL,
  `tenBV` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhomA` int(11) DEFAULT NULL,
  `nhomB` int(11) DEFAULT NULL,
  `nhomO` int(11) DEFAULT NULL,
  `nhomAB` int(11) DEFAULT NULL,
  `lienHe` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benhvien`
--

INSERT INTO `benhvien` (`maBV`, `tenBV`, `nhomA`, `nhomB`, `nhomO`, `nhomAB`, `lienHe`) VALUES
(1, 'Bệnh Viện Bạch Mai', 1000, 1000, NULL, NULL, '8691800'),
(2, 'Bệnh viện Hữu Nghị', NULL, NULL, NULL, NULL, '9714526'),
(3, 'Bệnh viện E', NULL, NULL, NULL, NULL, '7543832'),
(4, 'Viện Răng Hàm Mặt', NULL, NULL, NULL, NULL, '8269723'),
(5, 'Bệnh Viện Tai Mũi Họng T.Ư', NULL, NULL, NULL, NULL, '8697033'),
(6, 'Bệnh Viện Mắt T.Ư', NULL, NULL, NULL, NULL, '8226672'),
(7, 'Viện y học cổ truyền T.Ư', NULL, NULL, NULL, NULL, '8341676'),
(8, 'Bệnh viện Nội Tiết', NULL, NULL, NULL, NULL, '5621037'),
(9, 'Bệnh Viện K', NULL, NULL, NULL, NULL, '8246652'),
(10, 'Bệnh Viện Việt Đức', NULL, NULL, NULL, NULL, '8289267'),
(11, 'Bệnh Viện Phụ Sản T.Ư', NULL, NULL, NULL, NULL, '8259281'),
(12, 'Bệnh Viện Nhi T.Ư', NULL, NULL, NULL, NULL, '7754082'),
(13, 'Bệnh viện Châm cứu T.Ư', NULL, NULL, NULL, NULL, '834275'),
(14, 'Bệnh viện Lao và Bệnh Phổi', NULL, NULL, NULL, NULL, '7613723'),
(15, 'Bệnh viện Đống Đa', NULL, NULL, NULL, NULL, '5112506'),
(16, 'Bệnh viện Thanh Nhàn', NULL, NULL, NULL, NULL, '8210421'),
(17, 'Bệnh viện Xanh Pôn', NULL, NULL, NULL, NULL, '8233060'),
(18, 'Bệnh viện Việt Nam -Cu Ba', NULL, NULL, NULL, NULL, '9344362'),
(19, 'Bệnh viện Bắc Thăng Long', NULL, NULL, NULL, NULL, '024 3883 2727'),
(20, 'Bệnh Viện Phụ Sản HN', NULL, NULL, NULL, NULL, '8259281'),
(21, 'Bệnh viện Giao Thông Vận Tải I', NULL, NULL, NULL, NULL, '7664751'),
(22, 'Viện Huyết Học Truyền Máu', NULL, NULL, NULL, NULL, '8687863'),
(23, 'Viện Tim Mạch', NULL, NULL, NULL, NULL, '8694572'),
(24, 'Bệnh viện Y Học Cổ Truyền T.Ư', NULL, NULL, NULL, NULL, '943244229'),
(25, 'Bệnh viện Tâm Anh', NULL, NULL, NULL, NULL, '18006858');

-- --------------------------------------------------------

--
-- Table structure for table `diemhiemmau`
--

CREATE TABLE `diemhiemmau` (
  `maDiem` int(11) NOT NULL,
  `diaChi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngayHien` date DEFAULT NULL,
  `thoigian` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hienmau`
--

CREATE TABLE `hienmau` (
  `maHV` int(11) NOT NULL,
  `hoTen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaySinh` date DEFAULT NULL,
  `gioiTinh` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maNhom` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maQH` int(11) DEFAULT NULL,
  `diaChi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienThoai` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hienmau`
--

INSERT INTO `hienmau` (`maHV`, `hoTen`, `ngaySinh`, `gioiTinh`, `maNhom`, `maQH`, `diaChi`, `dienThoai`, `email`) VALUES
(1, 'Nguyễn Văn A', '1998-02-02', 'Nam', 'A', 1, 'số 1, Giảng Võ', '0123456789', 'nguyenvana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `nhanmau`
--

CREATE TABLE `nhanmau` (
  `maNM` int(11) NOT NULL,
  `hoTen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaySinh` date DEFAULT NULL,
  `gioiTinh` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maNhom` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soLuong` int(11) NOT NULL,
  `maQH` int(11) DEFAULT NULL,
  `diaChi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienThoai` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhommau`
--

CREATE TABLE `nhommau` (
  `maNhom` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenNhom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhommau`
--

INSERT INTO `nhommau` (`maNhom`, `tenNhom`) VALUES
('A', 'Nhóm A'),
('AB', 'Nhóm AB'),
('B', 'Nhóm B'),
('O', 'Nhóm O');

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyen`
--

CREATE TABLE `quanhuyen` (
  `maQH` int(11) NOT NULL,
  `tenQH` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quanhuyen`
--

INSERT INTO `quanhuyen` (`maQH`, `tenQH`) VALUES
(1, 'Ba Đình'),
(2, 'Hoàn Kiếm'),
(3, 'Tây Hồ'),
(4, 'Long Biên'),
(5, 'Cầu Giấy'),
(6, 'Đống Đa'),
(7, 'Hai Bà Trưng'),
(8, 'Hoàng Mai'),
(9, 'Thanh Xuân'),
(10, 'Hà Đông'),
(11, 'Sơn Tây'),
(12, 'Sóc Sơn'),
(13, 'Đông Anh'),
(14, 'Gia Lâm'),
(15, 'Từ Liêm'),
(16, 'Mê Linh'),
(17, 'Ba Vì'),
(18, 'Phúc Thọ'),
(19, 'Đan Phượng'),
(20, 'Hoài Đức'),
(21, 'Quốc Oai'),
(22, 'Thạch Thất'),
(23, 'Chương Mỹ'),
(24, 'Thanh Oai'),
(25, 'Thường Tín'),
(26, 'Phú Xuyên'),
(27, 'Ứng Hòa'),
(28, 'Mỹ Đức');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `maTV` int(11) NOT NULL,
  `hoTen` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenDangNhap` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matKhau` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maKichHoat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangThai` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`maTV`, `hoTen`, `tenDangNhap`, `email`, `matKhau`, `maKichHoat`, `trangThai`) VALUES
(3, 'Nguyễn Hoàng Phi Long', 'longnhp', 'soul.gemini305@gmail.com', '$2y$10$/4l6jFCCczv5J837Zwcwiuzne1lTNEUQEeYO4sZs0bhO6pRlfZin6', '173dd318b8e8dab544d257a7a37b2a68', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`maAd`);

--
-- Indexes for table `bandoc`
--
ALTER TABLE `bandoc`
  ADD PRIMARY KEY (`maTin`);

--
-- Indexes for table `benhvien`
--
ALTER TABLE `benhvien`
  ADD PRIMARY KEY (`maBV`);

--
-- Indexes for table `diemhiemmau`
--
ALTER TABLE `diemhiemmau`
  ADD PRIMARY KEY (`maDiem`);

--
-- Indexes for table `hienmau`
--
ALTER TABLE `hienmau`
  ADD PRIMARY KEY (`maHV`),
  ADD KEY `maNhom` (`maNhom`),
  ADD KEY `maQH` (`maQH`);

--
-- Indexes for table `nhanmau`
--
ALTER TABLE `nhanmau`
  ADD PRIMARY KEY (`maNM`),
  ADD KEY `maNhom` (`maNhom`),
  ADD KEY `maQH` (`maQH`);

--
-- Indexes for table `nhommau`
--
ALTER TABLE `nhommau`
  ADD PRIMARY KEY (`maNhom`);

--
-- Indexes for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD PRIMARY KEY (`maQH`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`maTV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `maAd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bandoc`
--
ALTER TABLE `bandoc`
  MODIFY `maTin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `benhvien`
--
ALTER TABLE `benhvien`
  MODIFY `maBV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `diemhiemmau`
--
ALTER TABLE `diemhiemmau`
  MODIFY `maDiem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hienmau`
--
ALTER TABLE `hienmau`
  MODIFY `maHV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nhanmau`
--
ALTER TABLE `nhanmau`
  MODIFY `maNM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  MODIFY `maQH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `maTV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hienmau`
--
ALTER TABLE `hienmau`
  ADD CONSTRAINT `hienmau_ibfk_1` FOREIGN KEY (`maNhom`) REFERENCES `nhommau` (`maNhom`),
  ADD CONSTRAINT `hienmau_ibfk_2` FOREIGN KEY (`maQH`) REFERENCES `quanhuyen` (`maQH`);

--
-- Constraints for table `nhanmau`
--
ALTER TABLE `nhanmau`
  ADD CONSTRAINT `nhanmau_ibfk_1` FOREIGN KEY (`maNhom`) REFERENCES `nhommau` (`maNhom`),
  ADD CONSTRAINT `nhanmau_ibfk_2` FOREIGN KEY (`maQH`) REFERENCES `quanhuyen` (`maQH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
