# Marvel
Marvel is a simple MVC php framework developed by Davie Munthali
in his quest to understand MVC frameworks based on a framework
used by Michael Peackock to develop a social network powered by smarty framework.


installation
=============
1. create a database called marvel
2. configure your database connection parameters in config.php file
3. create a users table

CREATE TABLE `users` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `valid` tinyint(1) NOT NULL,
  `pass_reset` varchar(50) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

4. < E N Y O Y  />
