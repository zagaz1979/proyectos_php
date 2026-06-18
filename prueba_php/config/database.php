<?php

/**
 * Archivo de configuración de la base de datos usando PDO
 * Actualizado para PHP 8.x y MySQL 8
 */

// ============================================================
// 1. DEFINIR LAS CONSTANTES DE CONEXIÓN (cámbialas por las tuyas)
// ============================================================
define('DB_HOST', 'sql208.byethost9.com');   // Host de MySQL (ej. sql123.byethost.com)
define('DB_NAME', 'b9_42216172_bd_pruebas');   // Nombre de la base de datos
define('DB_USER', 'b9_42216172');     // Usuario de la base de datos
define('DB_PASS', 'Zagaz__2526@');         // Contraseña del usuario
define('DB_CHARSET', 'utf8mb4');            // Juego de caracteres (recomendado)

// ============================================================
// 2. CREAR LA CONEXIÓN PDO
// ============================================================
try {
    // Construir el DSN (Data Source Name)
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    
    // Opciones de PDO para un mejor rendimiento y seguridad
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lanza excepciones en errores
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Devuelve arrays asociativos por defecto
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Usa consultas preparadas nativas
        PDO::ATTR_PERSISTENT         => false,                  // No usar conexiones persistentes (opcional)
    ];
    
    // Crear la instancia de PDO
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
    
    // (Opcional) Guardar la conexión en una variable global o en un contenedor
    // Pero aquí simplemente la devolvemos o la dejamos disponible
    echo "Se ha establecido la conexión";
    
} catch (PDOException $e) {
    // En producción, NO muestres el mensaje de error completo por seguridad
    // En desarrollo, puedes mostrarlo para depurar
    die("Error de conexión a la base de datos: " . $e->getMessage());
}

// ============================================================
// 3. USAR LA CONEXIÓN EN OTROS ARCHIVOS
// ============================================================
// Puedes incluir este archivo en cualquier otro y usar $pdo
// Ejemplo: require_once 'config/database.php';
// Luego: $stmt = $pdo->query("SELECT * FROM tabla");