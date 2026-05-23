CREATE TABLE tracking (
    id INT AUTO_INCREMENT PRIMARY KEY,
    stt VARCHAR(20) UNIQUE,
    pengirim VARCHAR(100),
    penerima VARCHAR(100),
    barang VARCHAR(100),
    asal VARCHAR(100),
    tujuan VARCHAR(100),
    status_pengiriman VARCHAR(255),
    lokasi_terakhir VARCHAR(255),
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO tracking
(
stt,
pengirim,
penerima,
barang,
asal,
tujuan,
status_pengiriman,
lokasi_terakhir
)

VALUES
(
'1020',
'Budi',
'Andi',
'Sparepart Motor',
'Jakarta',
'Batam',
'Dalam Perjalanan',
'Gudang Jakarta'
);
