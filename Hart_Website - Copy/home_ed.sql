-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 08:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_ed`
--

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `Plan_id` int(11) NOT NULL,
  `Cost` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `article_class` varchar(100) NOT NULL,
  `article` mediumtext NOT NULL,
  `id_article` int(11) NOT NULL,
  `ytlink` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`article_class`, `article`, `id_article`, `ytlink`) VALUES
('Digital Art', 'Digital art is the creation of artwork using digital technology. It includes techniques like digital painting, 3D modeling, and animation, with artists utilizing software and hardware tools to produce their work.\r\n\r\nThis art form offers versatility and accessibility, allowing artists to experiment and refine their creations easily. Digital platforms enable artists to share their work globally, fostering a vibrant online community.\r\n\r\nDigital art is pivotal in industries like entertainment, advertising, and design. It plays a crucial role in movies, video games, and marketing campaigns. The rise of NFTs has also provided new opportunities for digital artists to monetize their work uniquely.', 12, 'https://www.youtube.com/embed/SCGFxtsZYLM?si=AvkpdY4HTI7iB-4A'),
('Digital Illustration', 'Digital illustration is the creation of artwork using digital tools and software like Adobe Illustrator and Procreate. Artists use devices such as graphics tablets and styluses to produce detailed images with precision.\r\n\r\nThis medium offers great flexibility, allowing easy editing and experimentation with various styles and effects. Features like layers and digital brushes enhance the creative process, making it accessible to both beginners and professionals.\r\n\r\nDigital illustrations can be easily shared and reproduced, maintaining quality across different formats. They are widely used in web design, publishing, marketing, and entertainment to create engaging visuals.\r\n\r\nIn industries like publishing and entertainment, digital illustrations bring stories and concepts to life in books, magazines, animations, and video games. They also play a key role in advertising, making campaigns more appealing.\r\n\r\nThe digital illustration community thrives online, where artists share their work, receive feedback, and collaborate. This interconnectedness drives the evolution of styles and techniques, expanding the possibilities of digital art.', 13, ''),
('Pixel Art', 'Pixel art is a digital art form where images are created and edited at the pixel level. Each image is made up of individual pixels, which are the smallest units of a digital display. This art style is reminiscent of early computer and video game graphics, known for its blocky and grid-based look.\r\n\r\nArtists create pixel art using software like Aseprite, Photoshop, or even simpler tools like MS Paint. The process involves carefully placing and coloring each pixel to form intricate designs and scenes. Despite its simplicity, pixel art requires a keen eye for detail and color to create visually appealing images.\r\n\r\nPixel art is popular in video games, particularly in retro and indie games, where it evokes a nostalgic aesthetic. It is also used in animations, icons, and digital avatars, leveraging its distinctive style to create engaging visuals.\r\n\r\nThe charm of pixel art lies in its simplicity and the creativity it demands. It continues to be a beloved medium for artists and gamers alike, celebrating the beauty of minimalism and the technical skill of working within constraints.', 15, ''),
('3D Modeling', '3D modeling is the process of creating a three-dimensional representation of an object or scene using specialized software. This digital art form involves building models from geometric shapes like vertices, edges, and polygons. These models can be manipulated to achieve detailed and realistic designs.\r\n\r\nArtists use software such as Blender, Maya, and 3ds Max to create 3D models. The process includes shaping, texturing, and rendering to bring the model to life. Texturing adds surface details, while rendering generates the final image or animation.\r\n\r\n3D modeling is widely used in various industries, including video games, movies, architecture, and product design. It allows for the creation of realistic characters, environments, and objects, enhancing visual storytelling and design accuracy.\r\n\r\nThe versatility and realism of 3D modeling make it an essential tool in modern digital art and design. It enables artists and designers to visualize and experiment with concepts in a virtual space before bringing them to reality.', 16, ''),
('Photoshop', 'Photoshop, developed by Adobe, is a leading software for image editing and graphic design. It offers a comprehensive suite of tools for manipulating photos, creating digital artwork, and designing graphics. Users can perform tasks ranging from simple edits like cropping and color correction to complex creations involving multiple layers and effects.\r\n\r\nOne of Photoshop\'s strengths is its versatility. It supports various file formats and integrates with other Adobe products, making it suitable for photographers, designers, and digital artists. Tools like brushes, masks, and filters allow for detailed and precise adjustments, enabling users to enhance images or create entirely new compositions.\r\n\r\nPhotoshop is also known for its robust layer system, which allows users to work on different elements of an image separately. This non-destructive editing process provides flexibility and control, making it easier to refine and adjust designs. Advanced features like content-aware fill, smart objects, and 3D modeling further expand its capabilities.\r\n\r\nPhotoshop\'s widespread use in industries such as advertising, web design, and publishing underscores its importance. It remains a fundamental tool for professionals and hobbyists alike, continuously evolving to meet the demands of modern digital art and design.', 17, ''),
('Digital Animation', 'Digital animation is the creation of moving images using digital technology. It involves designing and sequencing a series of still images, called frames, to simulate motion. This process can range from simple animations like GIFs to complex projects such as feature-length films and video games.\r\n\r\nSoftware like Adobe Animate, Toon Boom Harmony, and Blender are commonly used for digital animation. These programs offer a range of tools for drawing, rigging, and animating characters and objects. Animators can create movement by manipulating keyframes, adjusting timing and easing, and adding effects like transformations and particle simulations.\r\n\r\nDigital animation is utilized in various industries, including entertainment, advertising, education, and video production. It is prevalent in animated movies, TV shows, commercials, explainer videos, and interactive media. Its ability to convey complex ideas and emotions through visuals and movement makes it a powerful storytelling medium.\r\n\r\nThe accessibility of digital animation tools has democratized the animation process, allowing artists and creators of all skill levels to bring their ideas to life. Online platforms and communities provide resources, tutorials, and opportunities for collaboration, fostering creativity and innovation in the field of digital animation.', 18, ''),
('Photogrhapy', 'Photography is the art and practice of capturing images using light-sensitive materials or digital sensors. It involves composing a scene, adjusting settings such as aperture and shutter speed, and capturing a moment in time. Photographers use cameras ranging from professional DSLRs to smartphone cameras to create images that convey emotions, tell stories, or document events.\r\n\r\nPhotography encompasses various genres, including portrait, landscape, documentary, street, and fashion photography. Each genre has its techniques, aesthetics, and storytelling approaches. Photographers often develop their unique style and vision, experimenting with composition, lighting, and post-processing techniques to create compelling visuals.\r\n\r\nWith the advent of digital technology, photography has become more accessible and versatile. Digital cameras offer instant feedback, allowing photographers to review and adjust their shots in real-time. Editing software like Adobe Lightroom and Photoshop further enhance the creative process, enabling photographers to refine their images and achieve their desired look.\r\n\r\nPhotography plays a crucial role in art, journalism, advertising, and personal expression. It captures moments of beauty, documents historical events, and communicates ideas and emotions across cultures and languages. As a visual medium, photography has the power to inform, inspire, and evoke profound emotional responses, making it an indispensable form of artistic expression in the modern world.', 19, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  `id_user` int(15) NOT NULL,
  `Plan` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `role`, `id_user`, `Plan`) VALUES
('anakin skywalker', '123', 'wdw@gmail.com', 'user', 30, '0'),
('UserTest', '1234', 'wdw@gmail.com', 'user', 31, 'Premium'),
('Test1user', '1234', 'admin@test.com', 'user', 33, 'Standard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
