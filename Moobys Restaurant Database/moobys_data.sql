INSERT INTO `mby_position` VALUES (1,'Manager'), (2,'Shift Manager'), (3,'Cashier'), (4,'Cook'), (5,'Drive-thru Operator');

INSERT INTO `mby_restaurant` VALUES (1, '858 Highway 35', 'Middletown', 'NJ', '07748'), (2, 'Highway 36 and West Avenue', 'Atlantic Highlands', 'NJ', '07716'), 
(3, '734 Route 36 and Union Avenue', 'Hazlet', 'NJ', '07730'), (4, 'Monmouth Mall Food Court', 'Eatontown', 'NJ', '07724'),
(5, '15 Newman Springs Road', 'Tinton Falls', 'NJ', '07724'), (6, '139 Route 35', 'Eatontown', 'NJ', '07724');

INSERT INTO `mby_employee` VALUES (1, 1, 1, 'Becky', 'Scott', 19.00, '7325559477'), (2, 1, 3, 'Dante', 'Hicks', 9.00, '7325558145'), 
(3, 1, 4, 'Randal', 'Graves', 9.00, '7325556188'), (4, 1, 5, 'Elias', 'Grover', 8.00, '7325551463'),
(5, 1, 4, 'Rick', 'Derris', 7.50, '7325554837'), (6, 2, 1, 'William', 'Black', 19.00, '7325550349'), 
(7, 2, 3, 'Caitlin', 'Bree', 9.25, '7325559893'), (8, 2, 4, 'Julie', 'Dwyer', 8.60, '7325558383'), 
(9, 2, 5, 'Olaf', 'Metalhead', 7.50, '7325556667'), (10, 2, 4, 'Brodie', 'Bruce', 7.50, '7325552917'),

(11, 3, 1, 'Tom', 'Sawyer', 19.00, '7325556412'), (12, 3, 3, 'Piotr', 'Rasputin', 9.05, '7325555297'), 
(13, 3, 4, 'Geoff', 'Johns', 9.10, '7325550089'), (14, 3, 5, 'Kitty', 'Pryde', 8.20, '7325552128'),
(15, 3, 4, 'Annie', 'Warbucks', 8.50, '7325551636'), (16, 4, 1, 'Bobby', 'Drake', 19.00, '7325550270'), 
(17, 4, 3, 'Sarah', 'Lee', 9.00, '7325553838'), (18, 4, 4, 'Scott', 'Summer', 9.00, '7325553336'), 
(19, 4, 5, 'Billy', 'Madison', 8.50, '7325555522'), (20, 4, 4, 'Madeline', 'Pryor', 8.50, '7325558470'),

(21, 5, 1, 'Makenzie', 'Cann', 19.00, '7325559963'), (22, 5, 3, 'Kyle', 'Macy', 9.00, '7325556349'), 
(23, 5, 4, 'Sam', 'Booie', 9.00, '7325554111'), (24, 5, 5, 'Jamal', 'Mashburn', 8.00, '7325551094'),
(25, 5, 4, 'Maci', 'Morris', 7.50, '7325555243'), (26, 6, 1, 'Ivana', 'Jakubcova', 19.00, '7325551322'), 
(27, 6, 3, 'Jim', 'Master', 9.25, '7325552011'), (28, 6, 4, 'Alyssa', 'Rice', 8.60, '7325557140'), 
(29, 6, 5, 'Ron', 'Mercer', 7.50, '7325551228'), (30, 6, 4, 'Travis', 'Ford', 7.50, '7325553763');

INSERT INTO `mby_menu_items`
VALUES
(1, 'Mooby Burger', 2.45, '1/4 lb. hunk of meat with cheese, lettuce, tomato, onion, pickle, mayo, ketchup, and mustard.'),
(2, 'Mooby Burger Fun Pal Meal', 5.45, 'Mooby Burger, Mooby-size fries, and Mooby-size drink'),
(3, 'Mooby Bovine Burger', 3.95, '1/2 lb. hunk of meat with cheese, lettuce, tomato, onion, pickle, mayo, ketchup, and mustard.'),
(4, 'Mooby Bovine Burger Fun Pal Meal', 6.95, 'Mooby Bovine Burger, Bovine-size fries, and Bovine-size drink'),
(5, 'Mooby Bacon Burger', 4.95, '1/4 lb. hunk of meat with bacon, cheese, lettuce, tomato, onion, pickle, mayo, ketchup, and mustard.'),
(6, 'Mooby Bacon Burger Fun Pal Meal', 7.95, 'Mooby Burger, Mooby-size fries, and Mooby-size drink'),
(7, 'Mooby Bovine Bacon Burger', 5.95, '1/2 lb. hunk of meat with bacon, cheese, lettuce, tomato, onion, pickle, mayo, ketchup, and mustard.'),
(8, 'Mooby Bovine Bacon Burger Fun Pal Meal', 8.95, 'Mooby Bovine Burger, Bovine-size fries, and Bovine-size drink'),
(9, 'Mooby Mother Clucker', 2.45, 'Fried chicken sandwich with lettuce, tomato, and mayo.'),
(10, 'Mooby Mother Clucker Fun Pal Meal', 5.45, 'Mooby Mother Clucker, Mooby-size fries, and Mooby-size drink'),
(11, 'Mooby 6-piece Sweet n Sour Surly Bits', 2.95, 'Chicken chunks slathered in sauce.'),
(12, 'Mooby 12-piece Sweet n Sour Surly Bits', 4.95, 'Chicken chuncks slathered in sauce.'),
(13, 'Mooby Sweet n Sour Surly Bits Fun Pal Meal', 6.95, '12-piece Sweet n Sour Surly Bits, Mooby-size fries, and Mooby-size drink'),
(14, 'Mooby Calf-sized Fries', 0.99, 'French fries for your little heifer.'),
(15, 'Mooby Fries', 1.95, 'Regular sized french fries.'),
(16, 'Mooby Bovine Fries', 2.45, 'Large sized french fries.'),
(17, 'Mooby Calf-sized Drink', 0.99, 'Drink for your little heifer.'),
(18, 'Mooby Drink', 1.55, 'Regular sized drink.'),
(19, 'Mooby Bovine Drink', 1.95, 'Large sized drink.');

INSERT INTO `mby_schedule`
VALUES
  (1, 1, '2016-04-03', '10:00:00', '22:00:00'),
  (2, 6, '2016-04-03', '10:00:00', '22:00:00'),
  (3, 11, '2016-04-03', '10:00:00', '22:00:00'),
  (4, 16, '2016-04-03', '10:00:00', '22:00:00'),
  (5, 21, '2016-04-03', '10:00:00', '22:00:00'),
  (6, 26, '2016-04-03', '10:00:00', '22:00:00'),
  (7, 2, '2016-04-03', '11:00:00', '22:00:00'),
  (8, 3, '2016-04-03', '13:00:00', '22:00:00'),
  (9, 4, '2016-04-03', '10:00:00', '22:00:00'),
  (10, 5, '2016-04-03', '15:00:00', '22:00:00'),
  (11, 7, '2016-04-03', '10:00:00', '22:00:00'),
  (12, 8, '2016-04-03', '10:00:00', '22:00:00'),
  (13, 9, '2016-04-03', '12:00:00', '22:00:00'),
  (14, 10, '2016-04-03', '13:00:00', '22:00:00'),
  (15, 12, '2016-04-03', '11:00:00', '22:00:00'),
  (16, 13, '2016-04-03', '10:00:00', '22:00:00'),
  (17, 14, '2016-04-03', '12:00:00', '22:00:00'),
  (18, 15, '2016-04-03', '14:00:00', '22:00:00'),
  (19, 17, '2016-04-03', '15:00:00', '22:00:00'),
  (20, 22, '2016-04-03', '11:00:00', '22:00:00'),
  (21, 19, '2016-04-03', '10:00:00', '22:00:00'),
  (22, 20, '2016-04-03', '11:00:00', '22:00:00'),
  (23, 22, '2016-04-03', '11:00:00', '22:00:00'),
  (24, 23, '2016-04-03', '13:00:00', '22:00:00'),
  (25, 24, '2016-04-03', '12:00:00', '22:00:00'),
  (26, 25, '2016-04-03', '11:00:00', '22:00:00'),
  (27, 27, '2016-04-03', '10:00:00', '22:00:00'),
  (28, 28, '2016-04-03', '10:00:00', '22:00:00'),
  (29, 29, '2016-04-03', '12:00:00', '22:00:00'),
  (30, 30, '2016-04-03', '10:00:00', '22:00:00'),

  (31, 1, '2016-04-04', '10:00:00', '22:00:00'),
  (32, 6, '2016-04-04', '10:00:00', '22:00:00'),
  (33, 11, '2016-04-04', '10:00:00', '22:00:00'),
  (34, 16, '2016-04-04', '10:00:00', '22:00:00'),
  (35, 21, '2016-04-04', '10:00:00', '22:00:00'),
  (36, 26, '2016-04-04', '10:00:00', '22:00:00'),
  (37, 2, '2016-04-04', '11:00:00', '22:00:00'),
  (38, 3, '2016-04-04', '13:00:00', '22:00:00'),
  (39, 4, '2016-04-04', '10:00:00', '22:00:00'),
  (40, 5, '2016-04-04', '15:00:00', '22:00:00'),
  (41, 7, '2016-04-04', '10:00:00', '22:00:00'),
  (42, 8, '2016-04-04', '10:00:00', '22:00:00'),
  (43, 9, '2016-04-04', '12:00:00', '22:00:00'),
  (44, 10, '2016-04-04', '13:00:00', '22:00:00'),
  (45, 12, '2016-04-04', '11:00:00', '22:00:00'),
  (46, 13, '2016-04-04', '10:00:00', '22:00:00'),
  (47, 14, '2016-04-04', '12:00:00', '22:00:00'),
  (48, 15, '2016-04-04', '14:00:00', '22:00:00'),
  (49, 17, '2016-04-04', '15:00:00', '22:00:00'),
  (50, 22, '2016-04-04', '11:00:00', '22:00:00'),
  (51, 19, '2016-04-04', '10:00:00', '22:00:00'),
  (52, 20, '2016-04-04', '11:00:00', '22:00:00'),
  (53, 22, '2016-04-04', '11:00:00', '22:00:00'),
  (54, 23, '2016-04-04', '13:00:00', '22:00:00'),
  (55, 24, '2016-04-04', '12:00:00', '22:00:00'),
  (56, 25, '2016-04-04', '11:00:00', '22:00:00'),
  (57, 27, '2016-04-04', '10:00:00', '22:00:00'),
  (58, 28, '2016-04-04', '10:00:00', '22:00:00'),
  (59, 29, '2016-04-04', '12:00:00', '22:00:00'),
  (60, 30, '2016-04-04', '10:00:00', '22:00:00'),

  (61, 1, '2016-04-05', '10:00:00', '22:00:00'),
  (62, 6, '2016-04-05', '10:00:00', '22:00:00'),
  (63, 11, '2016-04-05', '10:00:00', '22:00:00'),
  (64, 16, '2016-04-05', '10:00:00', '22:00:00'),
  (65, 21, '2016-04-05', '10:00:00', '22:00:00'),
  (66, 26, '2016-04-05', '10:00:00', '22:00:00'),
  (67, 2, '2016-04-05', '11:00:00', '22:00:00'),
  (68, 3, '2016-04-05', '13:00:00', '22:00:00'),
  (69, 4, '2016-04-05', '10:00:00', '22:00:00'),
  (70, 5, '2016-04-05', '15:00:00', '22:00:00'),
  (71, 7, '2016-04-05', '10:00:00', '22:00:00'),
  (72, 8, '2016-04-05', '10:00:00', '22:00:00'),
  (73, 9, '2016-04-05', '12:00:00', '22:00:00'),
  (74, 10, '2016-04-05', '13:00:00', '22:00:00'),
  (75, 12, '2016-04-05', '11:00:00', '22:00:00'),
  (76, 13, '2016-04-05', '10:00:00', '22:00:00'),
  (77, 14, '2016-04-05', '12:00:00', '22:00:00'),
  (78, 15, '2016-04-05', '14:00:00', '22:00:00'),
  (79, 17, '2016-04-05', '15:00:00', '22:00:00'),
  (80, 22, '2016-04-05', '11:00:00', '22:00:00'),
  (81, 19, '2016-04-05', '10:00:00', '22:00:00'),
  (82, 20, '2016-04-05', '11:00:00', '22:00:00'),
  (83, 22, '2016-04-05', '11:00:00', '22:00:00'),
  (84, 23, '2016-04-05', '13:00:00', '22:00:00'),
  (85, 24, '2016-04-05', '12:00:00', '22:00:00'),
  (86, 25, '2016-04-05', '11:00:00', '22:00:00'),
  (87, 27, '2016-04-05', '10:00:00', '22:00:00'),
  (88, 28, '2016-04-05', '10:00:00', '22:00:00'),
  (89, 29, '2016-04-05', '12:00:00', '22:00:00'),
  (90, 30, '2016-04-05', '10:00:00', '22:00:00'),


  (91, 1, '2016-04-06', '10:00:00', '22:00:00'),
  (92, 6, '2016-04-06', '10:00:00', '22:00:00'),
  (93, 11, '2016-04-06', '10:00:00', '22:00:00'),
  (94, 16, '2016-04-06', '10:00:00', '22:00:00'),
  (95, 21, '2016-04-06', '10:00:00', '22:00:00'),
  (96, 26, '2016-04-06', '10:00:00', '22:00:00'),
  (97, 2, '2016-04-06', '11:00:00', '22:00:00'),
  (98, 3, '2016-04-06', '13:00:00', '22:00:00'),
  (99, 4, '2016-04-06', '10:00:00', '22:00:00'),
  (100, 5, '2016-04-06', '15:00:00', '22:00:00'),
  (101, 7, '2016-04-06', '10:00:00', '22:00:00'),
  (102, 8, '2016-04-06', '10:00:00', '22:00:00'),
  (103, 9, '2016-04-06', '12:00:00', '22:00:00'),
  (104, 10, '2016-04-06', '13:00:00', '22:00:00'),
  (105, 12, '2016-04-06', '11:00:00', '22:00:00'),
  (106, 13, '2016-04-06', '10:00:00', '22:00:00'),
  (107, 14, '2016-04-06', '12:00:00', '22:00:00'),
  (108, 15, '2016-04-06', '14:00:00', '22:00:00'),
  (109, 17, '2016-04-06', '15:00:00', '22:00:00'),
  (110, 22, '2016-04-06', '11:00:00', '22:00:00'),
  (111, 19, '2016-04-06', '10:00:00', '22:00:00'),
  (112, 20, '2016-04-06', '11:00:00', '22:00:00'),
  (113, 22, '2016-04-06', '11:00:00', '22:00:00'),
  (114, 23, '2016-04-06', '13:00:00', '22:00:00'),
  (115, 24, '2016-04-06', '12:00:00', '22:00:00'),
  (116, 25, '2016-04-06', '11:00:00', '22:00:00'),
  (117, 27, '2016-04-06', '10:00:00', '22:00:00'),
  (118, 28, '2016-04-06', '10:00:00', '22:00:00'),
  (119, 29, '2016-04-06', '12:00:00', '22:00:00'),
  (120, 30, '2016-04-06', '10:00:00', '22:00:00'),

  (121, 1, '2016-04-07', '10:00:00', '22:00:00'),
  (122, 6, '2016-04-07', '10:00:00', '22:00:00'),
  (123, 11, '2016-04-07', '10:00:00', '22:00:00'),
  (124, 16, '2016-04-07', '10:00:00', '22:00:00'),
  (125, 21, '2016-04-07', '10:00:00', '22:00:00'),
  (126, 26, '2016-04-07', '10:00:00', '22:00:00'),
  (127, 2, '2016-04-07', '11:00:00', '22:00:00'),
  (128, 3, '2016-04-07', '13:00:00', '22:00:00'),
  (129, 4, '2016-04-07', '10:00:00', '22:00:00'),
  (130, 5, '2016-04-07', '15:00:00', '22:00:00'),
  (131, 7, '2016-04-07', '10:00:00', '22:00:00'),
  (132, 8, '2016-04-07', '10:00:00', '22:00:00'),
  (133, 9, '2016-04-07', '12:00:00', '22:00:00'),
  (134, 10, '2016-04-07', '13:00:00', '22:00:00'),
  (135, 12, '2016-04-07', '11:00:00', '22:00:00'),
  (136, 13, '2016-04-07', '10:00:00', '22:00:00'),
  (137, 14, '2016-04-07', '12:00:00', '22:00:00'),
  (138, 15, '2016-04-07', '14:00:00', '22:00:00'),
  (139, 17, '2016-04-07', '15:00:00', '22:00:00'),
  (140, 22, '2016-04-07', '11:00:00', '22:00:00'),
  (141, 19, '2016-04-07', '10:00:00', '22:00:00'),
  (142, 20, '2016-04-07', '11:00:00', '22:00:00'),
  (143, 22, '2016-04-07', '11:00:00', '22:00:00'),
  (144, 23, '2016-04-07', '13:00:00', '22:00:00'),
  (145, 24, '2016-04-07', '12:00:00', '22:00:00'),
  (146, 25, '2016-04-07', '11:00:00', '22:00:00'),
  (147, 27, '2016-04-07', '10:00:00', '22:00:00'),
  (148, 28, '2016-04-07', '10:00:00', '22:00:00'),
  (149, 29, '2016-04-07', '12:00:00', '22:00:00'),
  (150, 30, '2016-04-07', '10:00:00', '22:00:00'),

  (151, 1, '2016-04-08', '10:00:00', '22:00:00'),
  (152, 6, '2016-04-08', '10:00:00', '22:00:00'),
  (153, 11, '2016-04-08', '10:00:00', '22:00:00'),
  (154, 16, '2016-04-08', '10:00:00', '22:00:00'),
  (155, 21, '2016-04-08', '10:00:00', '22:00:00'),
  (156, 26, '2016-04-08', '10:00:00', '22:00:00'),
  (157, 2, '2016-04-08', '11:00:00', '22:00:00'),
  (158, 3, '2016-04-08', '13:00:00', '22:00:00'),
  (159, 4, '2016-04-08', '10:00:00', '22:00:00'),
  (160, 5, '2016-04-08', '15:00:00', '22:00:00'),
  (161, 7, '2016-04-08', '10:00:00', '22:00:00'),
  (162, 8, '2016-04-08', '10:00:00', '22:00:00'),
  (163, 9, '2016-04-08', '12:00:00', '22:00:00'),
  (164, 10, '2016-04-08', '13:00:00', '22:00:00'),
  (165, 12, '2016-04-08', '11:00:00', '22:00:00'),
  (166, 13, '2016-04-08', '10:00:00', '22:00:00'),
  (167, 14, '2016-04-08', '12:00:00', '22:00:00'),
  (168, 15, '2016-04-08', '14:00:00', '22:00:00'),
  (169, 17, '2016-04-08', '15:00:00', '22:00:00'),
  (170, 22, '2016-04-08', '11:00:00', '22:00:00'),
  (171, 19, '2016-04-08', '10:00:00', '22:00:00'),
  (172, 20, '2016-04-08', '11:00:00', '22:00:00'),
  (173, 22, '2016-04-08', '11:00:00', '22:00:00'),
  (174, 23, '2016-04-08', '13:00:00', '22:00:00'),
  (175, 24, '2016-04-08', '12:00:00', '22:00:00'),
  (176, 25, '2016-04-08', '11:00:00', '22:00:00'),
  (177, 27, '2016-04-08', '10:00:00', '22:00:00'),
  (178, 28, '2016-04-08', '10:00:00', '22:00:00'),
  (179, 29, '2016-04-08', '12:00:00', '22:00:00'),
  (180, 30, '2016-04-08', '10:00:00', '22:00:00');

INSERT INTO `mby_sales`
VALUES
(1, 1, 2, 1, 10, '2016-04-03'),
(2, 1, 2, 2, 18, '2016-04-03'),
(3, 1, 2, 3, 5, '2016-04-03'),
(4, 1, 2, 4, 6, '2016-04-03'),
(5, 1, 2, 5, 10, '2016-04-03'),
(6, 1, 2, 6, 13, '2016-04-03'),
(7, 1, 2, 7, 18, '2016-04-03'),
(8, 1, 2, 8, 11, '2016-04-03'),
(9, 1, 2, 9, 4, '2016-04-03'),
(10, 1, 2, 10, 6, '2016-04-03'),
(11, 1, 2, 11, 8, '2016-04-03'),
(12, 1, 2, 12, 11, '2016-04-03'),
(13, 1, 2, 13, 10, '2016-04-03'),
(14, 1, 2, 14, 13, '2016-04-03'),
(15, 1, 2, 15, 20, '2016-04-03'),
(16, 1, 2, 16, 1, '2016-04-03'),
(17, 1, 2, 17, 3, '2016-04-03'),
(18, 1, 2, 18, 12, '2016-04-03'),
(19, 1, 2, 19, 11, '2016-04-03'),

(20, 1, 4, 1, 2, '2016-04-03'),
(21, 1, 4, 2, 15, '2016-04-03'),
(22, 1, 4, 3, 16, '2016-04-03'),
(23, 1, 4, 4, 17, '2016-04-03'),
(24, 1, 4, 5, 15, '2016-04-03'),
(25, 1, 4, 6, 6, '2016-04-03'),
(26, 1, 4, 7, 17, '2016-04-03'),
(27, 1, 4, 8, 11, '2016-04-03'),
(28, 1, 4, 9, 10, '2016-04-03'),
(29, 1, 4, 10, 2, '2016-04-03'),
(30, 1, 4, 11, 3, '2016-04-03'),
(31, 1, 4, 12, 12, '2016-04-03'),
(32, 1, 4, 13, 19, '2016-04-03'),
(33, 1, 4, 14, 1, '2016-04-03'),
(34, 1, 4, 15, 13, '2016-04-03'),
(35, 1, 4, 16, 8, '2016-04-03'),
(36, 1, 4, 17, 19, '2016-04-03'),
(37, 1, 4, 18, 20, '2016-04-03'),
(38, 1, 4, 19, 8, '2016-04-03'),

(39, 2, 7, 1, 25, '2016-04-03'),
(40, 2, 7, 2, 10, '2016-04-03'),
(41, 2, 7, 3, 18, '2016-04-03'),
(42, 2, 7, 4, 21, '2016-04-03'),
(43, 2, 7, 5, 13, '2016-04-03'),
(44, 2, 7, 6, 10, '2016-04-03'),
(45, 2, 7, 7, 19, '2016-04-03'),
(46, 2, 7, 8, 31, '2016-04-03'),
(47, 2, 7, 9, 27, '2016-04-03'),
(48, 2, 7, 10, 20, '2016-04-03'),
(49, 2, 7, 11, 16, '2016-04-03'),
(50, 2, 7, 12, 19, '2016-04-03'),
(51, 2, 7, 13, 30, '2016-04-03'),
(52, 2, 7, 14, 35, '2016-04-03'),
(53, 2, 7, 15, 41, '2016-04-03'),
(54, 2, 7, 16, 8, '2016-04-03'),
(55, 2, 7, 17, 19, '2016-04-03'),
(56, 2, 7, 18, 22, '2016-04-03'),
(57, 2, 7, 19, 27, '2016-04-03'),

(58, 2, 9, 1, 18, '2016-04-03'),
(59, 2, 9, 2, 13, '2016-04-03'),
(60, 2, 9, 3, 22, '2016-04-03'),
(61, 2, 9, 4, 31, '2016-04-03'),
(62, 2, 9, 5, 18, '2016-04-03'),
(63, 2, 9, 6, 17, '2016-04-03'),
(64, 2, 9, 7, 19, '2016-04-03'),
(65, 2, 9, 8, 25, '2016-04-03'),
(66, 2, 9, 9, 20, '2016-04-03'),
(67, 2, 9, 10, 8, '2016-04-03'),
(68, 2, 9, 11, 45, '2016-04-03'),
(69, 2, 9, 12, 41, '2016-04-03'),
(70, 2, 9, 13, 23, '2016-04-03'),
(71, 2, 9, 14, 35, '2016-04-03'),
(72, 2, 9, 15, 11, '2016-04-03'),
(73, 2, 9, 16, 21, '2016-04-03'),
(74, 2, 9, 17, 28, '2016-04-03'),
(75, 2, 9, 18, 15, '2016-04-03'),
(76, 2, 9, 19, 22, '2016-04-03'),

(77, 3, 12, 1, 30, '2016-04-03'),
(78, 3, 12, 2, 1, '2016-04-03'),
(79, 3, 12, 3, 20, '2016-04-03'),
(80, 3, 12, 4, 2, '2016-04-03'),
(81, 3, 12, 5, 10, '2016-04-03'),
(82, 3, 12, 6, 42, '2016-04-03'),
(83, 3, 12, 7, 11, '2016-04-03'),
(84, 3, 12, 8, 12, '2016-04-03'),
(85, 3, 12, 9, 13, '2016-04-03'),
(86, 3, 12, 10, 32, '2016-04-03'),
(87, 3, 12, 11, 26, '2016-04-03'),
(88, 3, 12, 12, 8, '2016-04-03'),
(89, 3, 12, 13, 19, '2016-04-03'),
(90, 3, 12, 14, 22, '2016-04-03'),
(91, 3, 12, 15, 26, '2016-04-03'),
(92, 3, 12, 16, 24, '2016-04-03'),
(93, 3, 12, 17, 42, '2016-04-03'),
(94, 3, 12, 18, 23, '2016-04-03'),
(95, 3, 12, 19, 38, '2016-04-03'),

(96, 3, 14, 1, 20, '2016-04-03'),
(97, 3, 14, 2, 10, '2016-04-03'),
(98, 3, 14, 3, 18, '2016-04-03'),
(99, 3, 14, 4, 13, '2016-04-03'),
(100, 3, 14, 5, 26, '2016-04-03'),
(101, 3, 14, 6, 30, '2016-04-03'),
(102, 3, 14, 7, 20, '2016-04-03'),
(103, 3, 14, 8, 12, '2016-04-03'),
(104, 3, 14, 9, 9, '2016-04-03'),
(105, 3, 14, 10, 11, '2016-04-03'),
(106, 3, 14, 11, 30, '2016-04-03'),
(107, 3, 14, 12, 27, '2016-04-03'),
(108, 3, 14, 13, 20, '2016-04-03'),
(109, 3, 14, 14, 16, '2016-04-03'),
(110, 3, 14, 15, 9, '2016-04-03'),
(111, 3, 14, 16, 22, '2016-04-03'),
(112, 3, 14, 17, 14, '2016-04-03'),
(113, 3, 14, 18, 18, '2016-04-03'),
(114, 3, 14, 19, 30, '2016-04-03'),

(115, 4, 17, 1, 40, '2016-04-03'),
(116, 4, 17, 2, 10, '2016-04-03'),
(117, 4, 17, 3, 26, '2016-04-03'),
(118, 4, 17, 4, 18, '2016-04-03'),
(119, 4, 17, 5, 39, '2016-04-03'),
(120, 4, 17, 6, 24, '2016-04-03'),
(121, 4, 17, 7, 9, '2016-04-03'),
(122, 4, 17, 8, 51, '2016-04-03'),
(123, 4, 17, 9, 34, '2016-04-03'),
(124, 4, 17, 10, 26, '2016-04-03'),
(125, 4, 17, 11, 7, '2016-04-03'),
(126, 4, 17, 12, 22, '2016-04-03'),
(127, 4, 17, 13, 54, '2016-04-03'),
(128, 4, 17, 14, 2, '2016-04-03'),
(129, 4, 17, 15, 28, '2016-04-03'),
(130, 4, 17, 16, 23, '2016-04-03'),
(131, 4, 17, 17, 10, '2016-04-03'),
(132, 4, 17, 18, 34, '2016-04-03'),
(133, 4, 17, 19, 33, '2016-04-03'),

(134, 4, 19, 1, 31, '2016-04-03'),
(135, 4, 19, 2, 26, '2016-04-03'),
(136, 4, 19, 3, 24, '2016-04-03'),
(137, 4, 19, 4, 23, '2016-04-03'),
(138, 4, 19, 5, 22, '2016-04-03'),
(139, 4, 19, 6, 34, '2016-04-03'),
(140, 4, 19, 7, 39, '2016-04-03'),
(141, 4, 19, 8, 22, '2016-04-03'),
(142, 4, 19, 9, 19, '2016-04-03'),
(143, 4, 19, 10, 41, '2016-04-03'),
(144, 4, 19, 11, 23, '2016-04-03'),
(145, 4, 19, 12, 22, '2016-04-03'),
(146, 4, 19, 13, 18, '2016-04-03'),
(147, 4, 19, 14, 53, '2016-04-03'),
(148, 4, 19, 15, 24, '2016-04-03'),
(149, 4, 19, 16, 41, '2016-04-03'),
(150, 4, 19, 17, 22, '2016-04-03'),
(151, 4, 19, 18, 34, '2016-04-03'),
(152, 4, 19, 19, 48, '2016-04-03'),

(153, 5, 22, 1, 11, '2016-04-03'),
(154, 5, 22, 2, 35, '2016-04-03'),
(155, 5, 22, 3, 60, '2016-04-03'),
(156, 5, 22, 4, 11, '2016-04-03'),
(157, 5, 22, 5, 5, '2016-04-03'),
(158, 5, 22, 6, 54, '2016-04-03'),
(159, 5, 22, 7, 23, '2016-04-03'),
(160, 5, 22, 8, 44, '2016-04-03'),
(161, 5, 22, 9, 10, '2016-04-03'),
(162, 5, 22, 10, 91, '2016-04-03'),
(163, 5, 22, 11, 2, '2016-04-03'),
(164, 5, 22, 12, 33, '2016-04-03'),
(165, 5, 22, 13, 18, '2016-04-03'),
(166, 5, 22, 14, 66, '2016-04-03'),
(167, 5, 22, 15, 7, '2016-04-03'),
(168, 5, 22, 16, 23, '2016-04-03'),
(169, 5, 22, 17, 54, '2016-04-03'),
(170, 5, 22, 18, 44, '2016-04-03'),
(171, 5, 22, 19, 15, '2016-04-03'),

(172, 5, 24, 1, 15, '2016-04-03'),
(173, 5, 24, 2, 42, '2016-04-03'),
(174, 5, 24, 3, 29, '2016-04-03'),
(175, 5, 24, 4, 32, '2016-04-03'),
(176, 5, 24, 5, 35, '2016-04-03'),
(177, 5, 24, 6, 55, '2016-04-03'),
(178, 5, 24, 7, 41, '2016-04-03'),
(179, 5, 24, 8, 23, '2016-04-03'),
(180, 5, 24, 9, 10, '2016-04-03'),
(181, 5, 24, 10, 11, '2016-04-03'),
(182, 5, 24, 11, 1, '2016-04-03'),
(183, 5, 24, 12, 19, '2016-04-03'),
(184, 5, 24, 13, 54, '2016-04-03'),
(185, 5, 24, 14, 11, '2016-04-03'),
(186, 5, 24, 15, 56, '2016-04-03'),
(187, 5, 24, 16, 60, '2016-04-03'),
(188, 5, 24, 17, 22, '2016-04-03'),
(189, 5, 24, 18, 13, '2016-04-03'),
(190, 5, 24, 19, 42, '2016-04-03'),

(191, 6, 27, 1, 38, '2016-04-03'),
(192, 6, 27, 2, 41, '2016-04-03'),
(193, 6, 27, 3, 2, '2016-04-03'),
(194, 6, 27, 4, 24, '2016-04-03'),
(195, 6, 27, 5, 62, '2016-04-03'),
(196, 6, 27, 6, 3, '2016-04-03'),
(197, 6, 27, 7, 41, '2016-04-03'),
(198, 6, 27, 8, 2, '2016-04-03'),
(199, 6, 27, 9, 23, '2016-04-03'),
(200, 6, 27, 10, 46, '2016-04-03'),
(201, 6, 27, 11, 23, '2016-04-03'),
(202, 6, 27, 12, 46, '2016-04-03'),
(203, 6, 27, 13, 18, '2016-04-03'),
(204, 6, 27, 14, 37, '2016-04-03'),
(205, 6, 27, 15, 26, '2016-04-03'),
(206, 6, 27, 16, 9, '2016-04-03'),
(207, 6, 27, 17, 22, '2016-04-03'),
(208, 6, 27, 18, 50, '2016-04-03'),
(209, 6, 27, 19, 51, '2016-04-03'),

(210, 6, 29, 1, 18, '2016-04-03'),
(211, 6, 29, 2, 10, '2016-04-03'),
(212, 6, 29, 3, 3, '2016-04-03'),
(213, 6, 29, 4, 59, '2016-04-03'),
(214, 6, 29, 5, 34, '2016-04-03'),
(215, 6, 29, 6, 38, '2016-04-03'),
(216, 6, 29, 7, 10, '2016-04-03'),
(217, 6, 29, 8, 12, '2016-04-03'),
(218, 6, 29, 9, 19, '2016-04-03'),
(219, 6, 29, 10, 53, '2016-04-03'),
(220, 6, 29, 11, 56, '2016-04-03'),
(221, 6, 29, 12, 12, '2016-04-03'),
(222, 6, 29, 13, 65, '2016-04-03'),
(223, 6, 29, 14, 33, '2016-04-03'),
(224, 6, 29, 15, 5, '2016-04-03'),
(225, 6, 29, 16, 150, '2016-04-03'),
(226, 6, 29, 17, 19, '2016-04-03'),
(227, 6, 29, 18, 13, '2016-04-03'),
(228, 6, 29, 19, 26, '2016-04-03'),

################################
(229, 1, 2, 1, 10, '2016-04-04'),
(230, 1, 2, 2, 18, '2016-04-04'),
(231, 1, 2, 3, 5, '2016-04-04'),
(232, 1, 2, 4, 6, '2016-04-04'),
(233, 1, 2, 5, 10, '2016-04-04'),
(234, 1, 2, 6, 13, '2016-04-04'),
(235, 1, 2, 7, 18, '2016-04-04'),
(236, 1, 2, 8, 11, '2016-04-04'),
(237, 1, 2, 9, 4, '2016-04-04'),
(238, 1, 2, 10, 6, '2016-04-04'),
(239, 1, 2, 11, 8, '2016-04-04'),
(240, 1, 2, 12, 11, '2016-04-04'),
(241, 1, 2, 13, 10, '2016-04-04'),
(242, 1, 2, 14, 13, '2016-04-04'),
(243, 1, 2, 15, 20, '2016-04-04'),
(244, 1, 2, 16, 1, '2016-04-04'),
(245, 1, 2, 17, 3, '2016-04-04'),
(246, 1, 2, 18, 12, '2016-04-04'),
(247, 1, 2, 19, 11, '2016-04-04'),

(248, 1, 4, 1, 2, '2016-04-04'),
(249, 1, 4, 2, 15, '2016-04-04'),
(250, 1, 4, 3, 16, '2016-04-04'),
(251, 1, 4, 4, 17, '2016-04-04'),
(252, 1, 4, 5, 15, '2016-04-04'),
(253, 1, 4, 6, 6, '2016-04-04'),
(254, 1, 4, 7, 17, '2016-04-04'),
(255, 1, 4, 8, 11, '2016-04-04'),
(256, 1, 4, 9, 10, '2016-04-04'),
(257, 1, 4, 10, 2, '2016-04-04'),
(258, 1, 4, 11, 3, '2016-04-04'),
(259, 1, 4, 12, 12, '2016-04-04'),
(260, 1, 4, 13, 19, '2016-04-04'),
(261, 1, 4, 14, 1, '2016-04-04'),
(262, 1, 4, 15, 13, '2016-04-04'),
(263, 1, 4, 16, 8, '2016-04-04'),
(264, 1, 4, 17, 19, '2016-04-04'),
(265, 1, 4, 18, 20, '2016-04-04'),
(266, 1, 4, 19, 8, '2016-04-04'),

(267, 2, 7, 1, 25, '2016-04-04'),
(268, 2, 7, 2, 10, '2016-04-04'),
(269, 2, 7, 3, 18, '2016-04-04'),
(270, 2, 7, 4, 21, '2016-04-04'),
(271, 2, 7, 5, 13, '2016-04-04'),
(272, 2, 7, 6, 10, '2016-04-04'),
(273, 2, 7, 7, 19, '2016-04-04'),
(274, 2, 7, 8, 31, '2016-04-04'),
(275, 2, 7, 9, 27, '2016-04-04'),
(276, 2, 7, 10, 20, '2016-04-04'),
(277, 2, 7, 11, 16, '2016-04-04'),
(278, 2, 7, 12, 19, '2016-04-04'),
(279, 2, 7, 13, 30, '2016-04-04'),
(280, 2, 7, 14, 35, '2016-04-04'),
(281, 2, 7, 15, 41, '2016-04-04'),
(282, 2, 7, 16, 8, '2016-04-04'),
(283, 2, 7, 17, 19, '2016-04-04'),
(284, 2, 7, 18, 22, '2016-04-04'),
(285, 2, 7, 19, 27, '2016-04-04'),

(286, 2, 9, 1, 18, '2016-04-04'),
(287, 2, 9, 2, 13, '2016-04-04'),
(288, 2, 9, 3, 22, '2016-04-04'),
(289, 2, 9, 4, 31, '2016-04-04'),
(290, 2, 9, 5, 18, '2016-04-04'),
(291, 2, 9, 6, 17, '2016-04-04'),
(292, 2, 9, 7, 19, '2016-04-04'),
(293, 2, 9, 8, 25, '2016-04-04'),
(294, 2, 9, 9, 20, '2016-04-04'),
(295, 2, 9, 10, 8, '2016-04-04'),
(296, 2, 9, 11, 45, '2016-04-04'),
(297, 2, 9, 12, 41, '2016-04-04'),
(298, 2, 9, 13, 23, '2016-04-04'),
(299, 2, 9, 14, 35, '2016-04-04'),
(300, 2, 9, 15, 11, '2016-04-04'),
(301, 2, 9, 16, 21, '2016-04-04'),
(302, 2, 9, 17, 28, '2016-04-04'),
(303, 2, 9, 18, 15, '2016-04-04'),
(304, 2, 9, 19, 22, '2016-04-04'),

(305, 3, 12, 1, 30, '2016-04-04'),
(306, 3, 12, 2, 1, '2016-04-04'),
(307, 3, 12, 3, 20, '2016-04-04'),
(308, 3, 12, 4, 2, '2016-04-04'),
(309, 3, 12, 5, 10, '2016-04-04'),
(310, 3, 12, 6, 42, '2016-04-04'),
(311, 3, 12, 7, 11, '2016-04-04'),
(312, 3, 12, 8, 12, '2016-04-04'),
(313, 3, 12, 9, 13, '2016-04-04'),
(314, 3, 12, 10, 32, '2016-04-04'),
(315, 3, 12, 11, 26, '2016-04-04'),
(316, 3, 12, 12, 8, '2016-04-04'),
(317, 3, 12, 13, 19, '2016-04-04'),
(318, 3, 12, 14, 22, '2016-04-04'),
(319, 3, 12, 15, 26, '2016-04-04'),
(320, 3, 12, 16, 24, '2016-04-04'),
(321, 3, 12, 17, 42, '2016-04-04'),
(322, 3, 12, 18, 23, '2016-04-04'),
(323, 3, 12, 19, 38, '2016-04-04'),

(324, 3, 14, 1, 20, '2016-04-04'),
(325, 3, 14, 2, 10, '2016-04-04'),
(326, 3, 14, 3, 18, '2016-04-04'),
(327, 3, 14, 4, 13, '2016-04-04'),
(328, 3, 14, 5, 26, '2016-04-04'),
(329, 3, 14, 6, 30, '2016-04-04'),
(330, 3, 14, 7, 20, '2016-04-04'),
(331, 3, 14, 8, 12, '2016-04-04'),
(332, 3, 14, 9, 9, '2016-04-04'),
(333, 3, 14, 10, 11, '2016-04-04'),
(334, 3, 14, 11, 30, '2016-04-04'),
(335, 3, 14, 12, 27, '2016-04-04'),
(336, 3, 14, 13, 20, '2016-04-04'),
(337, 3, 14, 14, 16, '2016-04-04'),
(338, 3, 14, 15, 9, '2016-04-04'),
(339, 3, 14, 16, 22, '2016-04-04'),
(340, 3, 14, 17, 5, '2016-04-04'),
(341, 3, 14, 18, 18, '2016-04-04'),
(342, 3, 14, 19, 30, '2016-04-04'),

(343, 4, 17, 1, 40, '2016-04-04'),
(344, 4, 17, 2, 10, '2016-04-04'),
(345, 4, 17, 3, 26, '2016-04-04'),
(346, 4, 17, 4, 18, '2016-04-04'),
(347, 4, 17, 5, 39, '2016-04-04'),
(348, 4, 17, 6, 24, '2016-04-04'),
(349, 4, 17, 7, 9, '2016-04-04'),
(350, 4, 17, 8, 51, '2016-04-04'),
(351, 4, 17, 9, 34, '2016-04-04'),
(352, 4, 17, 10, 26, '2016-04-04'),
(353, 4, 17, 11, 7, '2016-04-04'),
(354, 4, 17, 12, 22, '2016-04-04'),
(355, 4, 17, 13, 54, '2016-04-04'),
(356, 4, 17, 14, 2, '2016-04-04'),
(357, 4, 17, 15, 28, '2016-04-04'),
(358, 4, 17, 16, 23, '2016-04-04'),
(359, 4, 17, 17, 10, '2016-04-04'),
(360, 4, 17, 18, 34, '2016-04-04'),
(361, 4, 17, 19, 33, '2016-04-04'),

(362, 4, 19, 1, 31, '2016-04-04'),
(363, 4, 19, 2, 26, '2016-04-04'),
(364, 4, 19, 3, 24, '2016-04-04'),
(365, 4, 19, 4, 23, '2016-04-04'),
(366, 4, 19, 5, 22, '2016-04-04'),
(367, 4, 19, 6, 34, '2016-04-04'),
(368, 4, 19, 7, 39, '2016-04-04'),
(369, 4, 19, 8, 22, '2016-04-04'),
(370, 4, 19, 9, 19, '2016-04-04'),
(371, 4, 19, 10, 41, '2016-04-04'),
(372, 4, 19, 11, 23, '2016-04-04'),
(373, 4, 19, 12, 22, '2016-04-04'),
(374, 4, 19, 13, 18, '2016-04-04'),
(375, 4, 19, 14, 53, '2016-04-04'),
(376, 4, 19, 15, 24, '2016-04-04'),
(377, 4, 19, 16, 41, '2016-04-04'),
(378, 4, 19, 17, 22, '2016-04-04'),
(379, 4, 19, 18, 34, '2016-04-04'),
(380, 4, 19, 19, 48, '2016-04-04'),

(381, 5, 22, 1, 11, '2016-04-04'),
(382, 5, 22, 2, 35, '2016-04-04'),
(383, 5, 22, 3, 60, '2016-04-04'),
(384, 5, 22, 4, 11, '2016-04-04'),
(385, 5, 22, 5, 5, '2016-04-04'),
(386, 5, 22, 6, 54, '2016-04-04'),
(387, 5, 22, 7, 23, '2016-04-04'),
(388, 5, 22, 8, 44, '2016-04-04'),
(389, 5, 22, 9, 10, '2016-04-04'),
(390, 5, 22, 10, 91, '2016-04-04'),
(391, 5, 22, 11, 2, '2016-04-04'),
(392, 5, 22, 12, 33, '2016-04-04'),
(393, 5, 22, 13, 18, '2016-04-04'),
(394, 5, 22, 14, 66, '2016-04-04'),
(395, 5, 22, 15, 7, '2016-04-04'),
(396, 5, 22, 16, 23, '2016-04-04'),
(397, 5, 22, 17, 54, '2016-04-04'),
(398, 5, 22, 18, 44, '2016-04-04'),
(399, 5, 22, 19, 15, '2016-04-04'),

(400, 5, 24, 1, 15, '2016-04-04'),
(401, 5, 24, 2, 42, '2016-04-04'),
(402, 5, 24, 3, 29, '2016-04-04'),
(403, 5, 24, 4, 32, '2016-04-04'),
(404, 5, 24, 5, 35, '2016-04-04'),
(405, 5, 24, 6, 55, '2016-04-04'),
(406, 5, 24, 7, 41, '2016-04-04'),
(407, 5, 24, 8, 23, '2016-04-04'),
(408, 5, 24, 9, 10, '2016-04-04'),
(409, 5, 24, 10, 11, '2016-04-04'),
(410, 5, 24, 11, 1, '2016-04-04'),
(411, 5, 24, 12, 19, '2016-04-04'),
(412, 5, 24, 13, 54, '2016-04-04'),
(413, 5, 24, 14, 11, '2016-04-04'),
(414, 5, 24, 15, 56, '2016-04-04'),
(415, 5, 24, 16, 60, '2016-04-04'),
(416, 5, 24, 17, 22, '2016-04-04'),
(417, 5, 24, 18, 13, '2016-04-04'),
(418, 5, 24, 19, 42, '2016-04-04'),

(419, 6, 27, 1, 38, '2016-04-04'),
(420, 6, 27, 2, 41, '2016-04-04'),
(421, 6, 27, 3, 2, '2016-04-04'),
(422, 6, 27, 4, 24, '2016-04-04'),
(423, 6, 27, 5, 62, '2016-04-04'),
(424, 6, 27, 6, 3, '2016-04-04'),
(425, 6, 27, 7, 41, '2016-04-04'),
(426, 6, 27, 8, 2, '2016-04-04'),
(427, 6, 27, 9, 23, '2016-04-04'),
(428, 6, 27, 10, 46, '2016-04-04'),
(429, 6, 27, 11, 23, '2016-04-04'),
(430, 6, 27, 12, 46, '2016-04-04'),
(431, 6, 27, 13, 18, '2016-04-04'),
(432, 6, 27, 14, 37, '2016-04-04'),
(433, 6, 27, 15, 26, '2016-04-04'),
(434, 6, 27, 16, 9, '2016-04-04'),
(435, 6, 27, 17, 22, '2016-04-04'),
(436, 6, 27, 18, 50, '2016-04-04'),
(437, 6, 27, 19, 51, '2016-04-04'),

(438, 6, 29, 1, 18, '2016-04-04'),
(439, 6, 29, 2, 10, '2016-04-04'),
(440, 6, 29, 3, 3, '2016-04-04'),
(441, 6, 29, 4, 59, '2016-04-04'),
(442, 6, 29, 5, 34, '2016-04-04'),
(443, 6, 29, 6, 38, '2016-04-04'),
(444, 6, 29, 7, 10, '2016-04-04'),
(445, 6, 29, 8, 12, '2016-04-04'),
(446, 6, 29, 9, 19, '2016-04-04'),
(447, 6, 29, 10, 53, '2016-04-04'),
(448, 6, 29, 11, 56, '2016-04-04'),
(449, 6, 29, 12, 12, '2016-04-04'),
(450, 6, 29, 13, 65, '2016-04-04'),
(451, 6, 29, 14, 33, '2016-04-04'),
(452, 6, 29, 15, 5, '2016-04-04'),
(453, 6, 29, 16, 150, '2016-04-04'),
(454, 6, 29, 17, 19, '2016-04-04'),
(455, 6, 29, 18, 13, '2016-04-04'),
(456, 6, 29, 19, 26, '2016-04-04'),

##############################
(457, 1, 2, 1, 10, '2016-04-05'),
(458, 1, 2, 2, 18, '2016-04-05'),
(459, 1, 2, 3, 5, '2016-04-05'),
(460, 1, 2, 4, 6, '2016-04-05'),
(461, 1, 2, 5, 10, '2016-04-05'),
(462, 1, 2, 6, 13, '2016-04-05'),
(463, 1, 2, 7, 18, '2016-04-05'),
(464, 1, 2, 8, 11, '2016-04-05'),
(465, 1, 2, 9, 4, '2016-04-05'),
(466, 1, 2, 10, 6, '2016-04-05'),
(467, 1, 2, 11, 8, '2016-04-05'),
(468, 1, 2, 12, 11, '2016-04-05'),
(469, 1, 2, 13, 10, '2016-04-05'),
(470, 1, 2, 14, 13, '2016-04-05'),
(471, 1, 2, 15, 20, '2016-04-05'),
(472, 1, 2, 16, 1, '2016-04-05'),
(473, 1, 2, 17, 3, '2016-04-05'),
(474, 1, 2, 18, 12, '2016-04-05'),
(475, 1, 2, 19, 11, '2016-04-05'),

(476, 1, 4, 1, 2, '2016-04-05'),
(477, 1, 4, 2, 15, '2016-04-05'),
(478, 1, 4, 3, 16, '2016-04-05'),
(479, 1, 4, 4, 17, '2016-04-05'),
(480, 1, 4, 5, 15, '2016-04-05'),
(481, 1, 4, 6, 6, '2016-04-05'),
(482, 1, 4, 7, 17, '2016-04-05'),
(483, 1, 4, 8, 11, '2016-04-05'),
(484, 1, 4, 9, 10, '2016-04-05'),
(485, 1, 4, 10, 2, '2016-04-05'),
(486, 1, 4, 11, 3, '2016-04-05'),
(487, 1, 4, 12, 12, '2016-04-05'),
(488, 1, 4, 13, 19, '2016-04-05'),
(489, 1, 4, 14, 1, '2016-04-05'),
(490, 1, 4, 15, 13, '2016-04-05'),
(491, 1, 4, 16, 8, '2016-04-05'),
(492, 1, 4, 17, 19, '2016-04-05'),
(493, 1, 4, 18, 20, '2016-04-05'),
(494, 1, 4, 19, 8, '2016-04-05'),
(495, 2, 7, 1, 25, '2016-04-05'),
(496, 2, 7, 2, 10, '2016-04-05'),
(497, 2, 7, 3, 18, '2016-04-05'),
(498, 2, 7, 4, 21, '2016-04-05'),
(499, 2, 7, 5, 13, '2016-04-05'),
(500, 2, 7, 6, 10, '2016-04-05'),
(501, 2, 7, 7, 19, '2016-04-05'),
(502, 2, 7, 8, 31, '2016-04-05'),
(503, 2, 7, 9, 27, '2016-04-05'),
(504, 2, 7, 10, 20, '2016-04-05'),
(505, 2, 7, 11, 16, '2016-04-05'),
(506, 2, 7, 12, 19, '2016-04-05'),
(507, 2, 7, 13, 30, '2016-04-05'),
(508, 2, 7, 14, 35, '2016-04-05'),
(509, 2, 7, 15, 41, '2016-04-05'),
(510, 2, 7, 16, 8, '2016-04-05'),
(511, 2, 7, 17, 19, '2016-04-05'),
(512, 2, 7, 18, 22, '2016-04-05'),
(513, 2, 7, 19, 27, '2016-04-05'),

(514, 2, 9, 1, 18, '2016-04-05'),
(515, 2, 9, 2, 13, '2016-04-05'),
(516, 2, 9, 3, 22, '2016-04-05'),
(517, 2, 9, 4, 31, '2016-04-05'),
(518, 2, 9, 5, 18, '2016-04-05'),
(519, 2, 9, 6, 17, '2016-04-05'),
(520, 2, 9, 7, 19, '2016-04-05'),
(521, 2, 9, 8, 25, '2016-04-05'),
(522, 2, 9, 9, 20, '2016-04-05'),
(523, 2, 9, 10, 8, '2016-04-05'),
(524, 2, 9, 11, 45, '2016-04-05'),
(525, 2, 9, 12, 41, '2016-04-05'),
(526, 2, 9, 13, 23, '2016-04-05'),
(527, 2, 9, 14, 35, '2016-04-05'),
(528, 2, 9, 15, 11, '2016-04-05'),
(529, 2, 9, 16, 21, '2016-04-05'),
(530, 2, 9, 17, 28, '2016-04-05'),
(531, 2, 9, 18, 15, '2016-04-05'),
(532, 2, 9, 19, 22, '2016-04-05'),

(533, 3, 12, 1, 30, '2016-04-05'),
(534, 3, 12, 2, 1, '2016-04-05'),
(535, 3, 12, 3, 20, '2016-04-05'),
(536, 3, 12, 4, 2, '2016-04-05'),
(537, 3, 12, 5, 10, '2016-04-05'),
(538, 3, 12, 6, 42, '2016-04-05'),
(539, 3, 12, 7, 11, '2016-04-05'),
(540, 3, 12, 8, 12, '2016-04-05'),
(541, 3, 12, 9, 13, '2016-04-05'),
(542, 3, 12, 10, 32, '2016-04-05'),
(543, 3, 12, 11, 26, '2016-04-05'),
(544, 3, 12, 12, 8, '2016-04-05'),
(545, 3, 12, 13, 19, '2016-04-05'),
(546, 3, 12, 14, 22, '2016-04-05'),
(547, 3, 12, 15, 26, '2016-04-05'),
(548, 3, 12, 16, 24, '2016-04-05'),
(549, 3, 12, 17, 42, '2016-04-05'),
(550, 3, 12, 18, 23, '2016-04-05'),
(551, 3, 12, 19, 38, '2016-04-05'),

(552, 3, 14, 1, 20, '2016-04-05'),
(553, 3, 14, 2, 10, '2016-04-05'),
(554, 3, 14, 3, 18, '2016-04-05'),
(555, 3, 14, 4, 13, '2016-04-05'),
(556, 3, 14, 5, 26, '2016-04-05'),
(557, 3, 14, 6, 30, '2016-04-05'),
(558, 3, 14, 7, 20, '2016-04-05'),
(559, 3, 14, 8, 12, '2016-04-05'),
(560, 3, 14, 9, 9, '2016-04-05'),
(561, 3, 14, 10, 11, '2016-04-05'),
(562, 3, 14, 11, 30, '2016-04-05'),
(563, 3, 14, 12, 27, '2016-04-05'),
(564, 3, 14, 13, 20, '2016-04-05'),
(565, 3, 14, 14, 16, '2016-04-05'),
(566, 3, 14, 15, 9, '2016-04-05'),
(567, 3, 14, 16, 22, '2016-04-05'),
(568, 3, 14, 17, 5, '2016-04-05'),
(569, 3, 14, 18, 18, '2016-04-05'),
(570, 3, 14, 19, 30, '2016-04-05'),

(571, 4, 17, 1, 40, '2016-04-05'),
(572, 4, 17, 2, 10, '2016-04-05'),
(573, 4, 17, 3, 26, '2016-04-05'),
(574, 4, 17, 4, 18, '2016-04-05'),
(575, 4, 17, 5, 39, '2016-04-05'),
(576, 4, 17, 6, 24, '2016-04-05'),
(577, 4, 17, 7, 9, '2016-04-05'),
(578, 4, 17, 8, 51, '2016-04-05'),
(579, 4, 17, 9, 34, '2016-04-05'),
(580, 4, 17, 10, 26, '2016-04-05'),
(581, 4, 17, 11, 7, '2016-04-05'),
(582, 4, 17, 12, 22, '2016-04-05'),
(583, 4, 17, 13, 54, '2016-04-05'),
(584, 4, 17, 14, 2, '2016-04-05'),
(585, 4, 17, 15, 28, '2016-04-05'),
(586, 4, 17, 16, 23, '2016-04-05'),
(587, 4, 17, 17, 10, '2016-04-05'),
(588, 4, 17, 18, 34, '2016-04-05'),
(589, 4, 17, 19, 33, '2016-04-05'),

(590, 4, 19, 1, 31, '2016-04-05'),
(591, 4, 19, 2, 26, '2016-04-05'),
(592, 4, 19, 3, 24, '2016-04-05'),
(593, 4, 19, 4, 23, '2016-04-05'),
(594, 4, 19, 5, 22, '2016-04-05'),
(595, 4, 19, 6, 34, '2016-04-05'),
(596, 4, 19, 7, 39, '2016-04-05'),
(597, 4, 19, 8, 22, '2016-04-05'),
(598, 4, 19, 9, 19, '2016-04-05'),
(599, 4, 19, 10, 41, '2016-04-05'),
(600, 4, 19, 11, 23, '2016-04-05'),
(601, 4, 19, 12, 22, '2016-04-05'),
(602, 4, 19, 13, 18, '2016-04-05'),
(603, 4, 19, 14, 53, '2016-04-05'),
(604, 4, 19, 15, 24, '2016-04-05'),
(605, 4, 19, 16, 41, '2016-04-05'),
(606, 4, 19, 17, 22, '2016-04-05'),
(607, 4, 19, 18, 34, '2016-04-05'),
(608, 4, 19, 19, 48, '2016-04-05'),

(609, 5, 22, 1, 11, '2016-04-05'),
(610, 5, 22, 2, 35, '2016-04-05'),
(611, 5, 22, 3, 60, '2016-04-05'),
(612, 5, 22, 4, 11, '2016-04-05'),
(613, 5, 22, 5, 5, '2016-04-05'),
(614, 5, 22, 6, 54, '2016-04-05'),
(615, 5, 22, 7, 23, '2016-04-05'),
(616, 5, 22, 8, 44, '2016-04-05'),
(617, 5, 22, 9, 10, '2016-04-05'),
(618, 5, 22, 10, 91, '2016-04-05'),
(619, 5, 22, 11, 2, '2016-04-05'),
(620, 5, 22, 12, 33, '2016-04-05'),
(621, 5, 22, 13, 18, '2016-04-05'),
(622, 5, 22, 14, 66, '2016-04-05'),
(623, 5, 22, 15, 7, '2016-04-05'),
(624, 5, 22, 16, 23, '2016-04-05'),
(625, 5, 22, 17, 54, '2016-04-05'),
(626, 5, 22, 18, 44, '2016-04-05'),
(627, 5, 22, 19, 15, '2016-04-05'),

(628, 5, 24, 1, 15, '2016-04-05'),
(629, 5, 24, 2, 42, '2016-04-05'),
(630, 5, 24, 3, 29, '2016-04-05'),
(631, 5, 24, 4, 32, '2016-04-05'),
(632, 5, 24, 5, 35, '2016-04-05'),
(633, 5, 24, 6, 55, '2016-04-05'),
(634, 5, 24, 7, 41, '2016-04-05'),
(635, 5, 24, 8, 23, '2016-04-05'),
(636, 5, 24, 9, 10, '2016-04-05'),
(637, 5, 24, 10, 11, '2016-04-05'),
(638, 5, 24, 11, 1, '2016-04-05'),
(639, 5, 24, 12, 19, '2016-04-05'),
(640, 5, 24, 13, 54, '2016-04-05'),
(641, 5, 24, 14, 11, '2016-04-05'),
(642, 5, 24, 15, 56, '2016-04-05'),
(643, 5, 24, 16, 60, '2016-04-05'),
(644, 5, 24, 17, 22, '2016-04-05'),
(645, 5, 24, 18, 13, '2016-04-05'),
(646, 5, 24, 19, 42, '2016-04-05'),

(647, 6, 27, 1, 38, '2016-04-05'),
(648, 6, 27, 2, 41, '2016-04-05'),
(649, 6, 27, 3, 2, '2016-04-05'),
(650, 6, 27, 4, 24, '2016-04-05'),
(651, 6, 27, 5, 62, '2016-04-05'),
(652, 6, 27, 6, 3, '2016-04-05'),
(653, 6, 27, 7, 41, '2016-04-05'),
(654, 6, 27, 8, 2, '2016-04-05'),
(655, 6, 27, 9, 23, '2016-04-05'),
(656, 6, 27, 10, 46, '2016-04-05'),
(657, 6, 27, 11, 23, '2016-04-05'),
(658, 6, 27, 12, 46, '2016-04-05'),
(659, 6, 27, 13, 18, '2016-04-05'),
(660, 6, 27, 14, 37, '2016-04-05'),
(661, 6, 27, 15, 26, '2016-04-05'),
(662, 6, 27, 16, 9, '2016-04-05'),
(663, 6, 27, 17, 22, '2016-04-05'),
(664, 6, 27, 18, 50, '2016-04-05'),
(665, 6, 27, 19, 51, '2016-04-05'),

(666, 6, 29, 1, 18, '2016-04-05'),
(667, 6, 29, 2, 10, '2016-04-05'),
(668, 6, 29, 3, 3, '2016-04-05'),
(669, 6, 29, 4, 59, '2016-04-05'),
(670, 6, 29, 5, 34, '2016-04-05'),
(671, 6, 29, 6, 38, '2016-04-05'),
(672, 6, 29, 7, 10, '2016-04-05'),
(673, 6, 29, 8, 12, '2016-04-05'),
(674, 6, 29, 9, 19, '2016-04-05'),
(675, 6, 29, 10, 53, '2016-04-05'),
(676, 6, 29, 11, 56, '2016-04-05'),
(677, 6, 29, 12, 12, '2016-04-05'),
(678, 6, 29, 13, 65, '2016-04-05'),
(679, 6, 29, 14, 33, '2016-04-05'),
(680, 6, 29, 15, 5, '2016-04-05'),
(681, 6, 29, 16, 150, '2016-04-05'),
(682, 6, 29, 17, 19, '2016-04-05'),
(683, 6, 29, 18, 13, '2016-04-05'),
(684, 6, 29, 19, 26, '2016-04-05');
