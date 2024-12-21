<?php
// Path to the PDF file (relative to the location of download.php)
$file_path = __DIR__ . '/files/portfolio-Simran_H_Beedi.pdf.pdf';

// Check if the file exists
if (file_exists($file_path)) {
    // Set headers to trigger download
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_path));

    // Clear output buffer and read the file
    ob_clean();
    flush();
    readfile($file_path);
    exit;
} else {
    echo "Error: File not found!";
}
?>
