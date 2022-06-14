
### 🧻 Create a Database in MySQL

1. Create a database of name `resultdb` and create a table of name `results`:

~~~~
   CREATE TABLE `results` (
  `rollno` varchar(6) NOT NULL,
  `cgpa` varchar(4) NOT NULL,
  `status` varchar(100) NOT NULL,
  `refard` varchar(100) NOT NULL
)

INSERT INTO `results` (`rollno`, `cgpa`, `status`, `refard`) VALUES

('559652', '3.00', 'passed', 'Not Found'),
('559653', '3.93', 'passed', 'Not Found');
COMMIT;

~~~~

### 🐈 Installation with git

1. Clone the repo
   ```sh
   git clone https://github.com/sh-rodro/practice-project.git
   ```

