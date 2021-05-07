CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `edad` int(11) NOT NULL
) 

-- Triggers `empleado`

DELIMITER $$
CREATE TRIGGER `empleado_before_insert` BEFORE INSERT ON `empleado` FOR EACH ROW BEGIN
	SET NEW.nombre = UCASE(NEW.nombre);
END
$$

CREATE TRIGGER `update_trigger_mayus` BEFORE UPDATE ON `empleado` FOR EACH ROW BEGIN
	SET NEW.nombre = UCASE(NEW.nombre);
END
$$

