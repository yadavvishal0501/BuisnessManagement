CREATE TABLE `cmd_order` (
  `order_id` int(11) NOT NULL,
  `order_type` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `order_status` enum('Active','Cancelled','Completed','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--add primary key
ALTER TABLE `cmd_order`
  ADD PRIMARY KEY (`order_id`);


ALTER TABLE `cmd_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;