-- Table structure for table `BlogPost`
--

CREATE TABLE `farms` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) DEFAULT NULL,
    `description` text DEFAULT NULL,
    `location` varchar(255) DEFAULT NULL,
    `activities` text DEFAULT NULL,
    `contact_info` varchar(255) DEFAULT NULL,
    `price` float DEFAULT NULL,
    `amenities` json DEFAULT NULL,
    `timeline` varchar(20) DEFAULT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (id)
);
CREATE TABLE `user_farms` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,
    `farm_id` int(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id),
    FOREIGN KEY (farm_id) REFERENCES farms (id)
);

CREATE TABLE `reviews` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `farm` int(11) NOT NULL,
    `rating` int(5) DEFAULT 0,
    `comment` text DEFAULT NULL,
    `user_name` varchar(50) DEFAULT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (id),
    FOREIGN KEY (farm) REFERENCES farms (id)
);
CREATE TABLE `amenities`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(20) DEFAULT NULL,
    PRIMARY KEY (id)
);
CREATE TABLE `reservations` (
    `id` int(11) NOT NULL,
    `user_name` varchar(255) DEFAULT NULL,
    `farm` int(11) DEFAULT NULL,
    `check_in` date DEFAULT NULL,
    `check_out` date DEFAULT NULL,
    `adult` int(10) DEFAULT NULL,
    `children` int(10) DEFAULT NULL,
    `room` int(10) DEFAULT NULL,
    `night` int(10) DEFAULT NULL,
    `amenities` json DEFAULT NULL,
    `email` varchar(100) DEFAULT NULL,
    `phone_no` int(10) DEFAULT NULL,
    `status` varchar(10) DEFAULT "pending",
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    FOREIGN KEY (farm) REFERENCES farms (id)
);