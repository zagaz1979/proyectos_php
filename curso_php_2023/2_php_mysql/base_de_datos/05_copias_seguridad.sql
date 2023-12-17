-- Copia de seguridad
-- mysqldump -u user -p exampledb > respaldo_exampledb.sql
-- mysqldump -u tu_usuario -p tu_contraseña --databases inventario > backup_inventario.sql

-- Creando la base de datos automaticamente
-- mysqldump -u root -p tu_contraseña --databases --add-drop-database inventario > backup_inventario.sql

mysqldump -u root inventario > copia_inventario.sql


-- restaurar
--mysql -u usuario -p exampledb < respaldo.sql
mysql -u root inventario < copia_inventario.sql

