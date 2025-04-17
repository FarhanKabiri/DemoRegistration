CREATE TABLE IF NOT EXISTS slots (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slot_time VARCHAR(100),
    capacity INT DEFAULT 6
);
INSERT INTO slots (slot_time) VALUES
('4/19/2070, 6:00 PM – 7:00 PM'),
('4/19/2070, 7:00 PM – 8:00 PM'),
('4/19/2070, 8:00 PM – 9:00 PM'),
('4/20/2070, 6:00 PM – 7:00 PM'),
('4/20/2070, 7:00 PM – 8:00 PM'),
('4/20/2070, 8:00 PM – 9:00 PM');

CREATE TABLE IF NOT EXISTS students (
    id CHAR(8) PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    project_title VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    slot_id INT NOT NULL,
    registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (slot_id) REFERENCES slots(id)
);