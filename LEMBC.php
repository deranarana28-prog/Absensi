<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Pelatih - TIM LEMBC MANAGEMENT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --success: #27ae60;
            --warning: #f39c12;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            line-height: 1.6;
            padding: 10px;
            min-height: 100vh;
        }
        
        .container {
            max-width: 100%;
            margin: 0 auto;
        }
        
        header {
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 5px;
        }
        
        .subtitle {
            color: var(--secondary);
            font-size: 0.9rem;
        }
        
        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .card-title {
            color: var(--primary);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .card-title i {
            color: var(--secondary);
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: var(--dark);
        }
        
        input, select, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input:focus, select:focus, textarea:focus {
            border-color: var(--secondary);
            outline: none;
        }
        
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        
        .btn {
            display: inline-block;
            background: var(--secondary);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s;
            width: 100%;
        }
        
        .btn:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }
        
        .btn-success {
            background: var(--success);
        }
        
        .btn-success:hover {
            background: #219653;
        }
        
        .btn-warning {
            background: var(--warning);
        }
        
        .btn-warning:hover {
            background: #e67e22;
        }
        
        .btn-danger {
            background: var(--accent);
        }
        
        .btn-danger:hover {
            background: #c0392b;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: var(--primary);
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .status-hadir {
            background-color: rgba(39, 174, 96, 0.2);
            color: var(--success);
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }
        
        .status-tidak {
            background-color: rgba(231, 76, 60, 0.2);
            color: var(--accent);
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }
        
        .status-izin {
            background-color: rgba(243, 156, 18, 0.2);
            color: var(--warning);
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }
        
        .riwayat-item {
            background: #f8f9fa;
            border-left: 4px solid var(--secondary);
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 0 8px 8px 0;
        }
        
        .riwayat-tanggal {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 5px;
        }
        
        .riwayat-sekolah {
            color: var(--secondary);
            font-weight: 600;
        }
        
        .footer {
            text-align: center;
            margin-top: 30px;
            color: white;
            font-size: 0.85rem;
            opacity: 0.8;
        }
        
        @media (max-width: 600px) {
            h1 {
                font-size: 1.3rem;
            }
            
            th, td {
                padding: 8px;
                font-size: 0.9rem;
            }
            
            .card {
                padding: 15px;
            }
        }
        
        /* Loading animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1><i class="fas fa-drum"></i> ABSENSI PELATIH</h1>
            <p class="subtitle">TIM LEMBC MANAGEMENT - DRUMBAND</p>
        </header>
        
        <div class="card">
            <div class="card-title">
                <i class="fas fa-calendar-alt"></i>
                <h2>Tanggal & Lokasi Latihan</h2>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Latihan</label>
                <input type="date" id="tanggal">
            </div>
            <div class="form-group">
                <label for="sekolah">Lokasi Sekolah</label>
                <select id="sekolah">
                    <option value="">Pilih Sekolah</option>
                    <option value="">Semua Sekolah</option>
                    <option value="SMPM 8 Laren">SMPM 8 Laren</option>
                    <option value="HSN PRPM Wotan">HSN PRPM Wotan</option>
                    <option value="MTsM 9 Wotan">MTsM 9 wotan</option>
                    <option value="SDM Sidayu">SDM Sidayu</option>
                    <option value="MIM 6 Karangtawar">MIM 6 Karangtawar</option>
                    <option value="Lainnya">Lainnya (tulis di keterangan)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan Latihan</label>
                <textarea id="keterangan" placeholder="Jenis latihan, materi, atau catatan lainnya..."></textarea>
            </div>
            <button class="btn" onclick="setTanggalLokasi()">
                <i class="fas fa-check-circle"></i> Set Tanggal & Lokasi
            </button>
        </div>
        
        <div class="card">
            <div class="card-title">
                <i class="fas fa-users"></i>
                <h2>Data Pelatih</h2>
            </div>
            <div class="form-group">
                <label for="namaPelatih">Nama Pelatih</label>
                <input type="text" id="namaPelatih" placeholder="Masukkan nama pelatih">
            </div>
            <div class="form-group">
                <label for="posisi">Posisi/Jabatan</label>
                <select id="posisi">
                    <option value="">Pilih Posisi</option>
                    <option value="Pelatih Inti">Pelatih Inti</option>
                    <option value="Asisten Pelatih">Asisten Pelatih</option>
                    <option value="Pelatih Musik">Pelatih Musik</option>
                    <option value="Pelatih Gerak">Pelatih Gerak</option>
                    <option value="Kordinator">Kordinator</option>
                </select>
            </div>
            <button class="btn btn-success" onclick="tambahPelatih()">
                <i class="fas fa-user-plus"></i> Tambah Pelatih
            </button>
            
            <table>
                <thead>
                    <tr>
                        <th>Nama Pelatih</th>
                        <th>Posisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="daftarPelatih"></tbody>
            </table>
        </div>
        
        <div class="card">
            <div class="card-title">
                <i class="fas fa-clipboard-check"></i>
                <h2>Absensi Pelatih Hari Ini</h2>
            </div>
            <p id="info-lokasi" style="margin-bottom: 15px; font-style: italic; color: #666;"></p>
            
            <div class="form-group">
                <label for="pilihPelatih">Pilih Pelatih</label>
                <select id="pilihPelatih">
                    <option value="">Pilih Pelatih</option>
                </select>
            </div>
            <div class="form-group">
                <label for="statusAbsensi">Status Kehadiran</label>
                <select id="statusAbsensi">
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                    <option value="Izin">Izin</option>
                </select>
            </div>
            <button class="btn" onclick="simpanAbsensi()">
                <i class="fas fa-save"></i> Simpan Absensi
            </button>
            
            <table>
                <thead>
                    <tr>
                        <th>Nama Pelatih</th>
                        <th>Status</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody id="tabelAbsensi"></tbody>
            </table>
        </div>
        
        <div class="card">
            <div class="card-title">
                <i class="fas fa-history"></i>
                <h2>Riwayat Absensi</h2>
            </div>
            <div class="form-group">
                <label for="filterTanggal">Filter Berdasarkan Tanggal</label>
                <input type="date" id="filterTanggal">
            </div>
            <div class="form-group">
                <label for="filterSekolah">Filter Berdasarkan Sekolah</label>
                <select id="filterSekolah">
                    <option value="">Semua Sekolah</option>
                    <option value="SMPM 8 Laren">SMPM 8 Laren</option>
                    <option value="HSN PRPM Wotan">HSN PRPM Wotan</option>
                    <option value="MTsM 9 Wotan">MTsM 9 wotan</option>
                    <option value="SDM Sidayu">SDM Sidayu</option>
                    <option value="MIM 6 Karangtawar">MIM 6 Karangtawar</option>
                </select>
            </div>
            <button class="btn" onclick="tampilkanRiwayat()">
                <i class="fas fa-filter"></i> Terapkan Filter
            </button>
            <button class="btn btn-warning" onclick="eksporData()" style="margin-top: 10px;">
                <i class="fas fa-download"></i> Ekspor ke CSV
            </button>
            
            <div id="riwayatContainer" style="margin-top: 20px;"></div>
        </div>
        
        <div class="card">
            <div class="card-title">
                <i class="fas fa-database"></i>
                <h2>Manajemen Data</h2>
            </div>
            <button class="btn btn-danger" onclick="hapusSemuaData()">
                <i class="fas fa-trash-alt"></i> Hapus Semua Data
            </button>
            <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">
                Peringatan: Tindakan ini akan menghapus semua data absensi dan tidak dapat dikembalikan.
            </p>
        </div>
        
        <div class="footer">
            <p>&copy; 2025 TIM LEMBC MANAGEMENT - Aplikasi Absensi Pelatih Drumband</p>
        </div>
    </div>

    <script>
        // Data
        let pelatih = JSON.parse(localStorage.getItem('pelatih')) || [];
        let absensiHariIni = JSON.parse(localStorage.getItem('absensiHariIni')) || {};
        let riwayatAbsensi = JSON.parse(localStorage.getItem('riwayatAbsensi')) || {};
        let settings = JSON.parse(localStorage.getItem('settings')) || {};
        
        // Inisialisasi
        function init() {
            // Set tanggal default ke hari ini
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('tanggal').value = today;
            
            // Load data
            loadDaftarPelatih();
            updateInfoLokasi();
            loadAbsensiHariIni();
        }
        
        // Set tanggal dan lokasi latihan
        function setTanggalLokasi() {
            const tanggal = document.getElementById('tanggal').value;
            const sekolah = document.getElementById('sekolah').value;
            const keterangan = document.getElementById('keterangan').value;
            
            if (!tanggal) {
                alert('Harap pilih tanggal latihan!');
                return;
            }
            
            settings.tanggal = tanggal;
            settings.sekolah = sekolah;
            settings.keterangan = keterangan;
            
            localStorage.setItem('settings', JSON.stringify(settings));
            updateInfoLokasi();
            
            alert('Tanggal dan lokasi latihan berhasil disimpan!');
        }
        
        // Update info lokasi di tampilan
        function updateInfoLokasi() {
            const infoElement = document.getElementById('info-lokasi');
            if (settings.tanggal && settings.sekolah) {
                const formattedDate = new Date(settings.tanggal).toLocaleDateString('id-ID', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
                
                infoElement.innerHTML = `<strong>${formattedDate}</strong> - ${settings.sekolah}${settings.keterangan ? '<br>' + settings.keterangan : ''}`;
            } else {
                infoElement.textContent = 'Silahkan set tanggal dan lokasi latihan terlebih dahulu.';
            }
        }
        
        // Tambah pelatih
        function tambahPelatih() {
            const nama = document.getElementById('namaPelatih').value.trim();
            const posisi = document.getElementById('posisi').value;
            
            if (!nama) {
                alert('Harap masukkan nama pelatih!');
                return;
            }
            
            if (!posisi) {
                alert('Harap pilih posisi/jabatan!');
                return;
            }
            
            pelatih.push({
                id: Date.now(),
                nama: nama,
                posisi: posisi
            });
            
            document.getElementById('namaPelatih').value = '';
            document.getElementById('posisi').value = '';
            
            simpanData();
            loadDaftarPelatih();
            
            alert(`Pelatih ${nama} berhasil ditambahkan!`);
        }
        
        // Hapus pelatih
        function hapusPelatih(id) {
            if (confirm('Apakah Anda yakin ingin menghapus pelatih ini?')) {
                pelatih = pelatih.filter(p => p.id !== id);
                simpanData();
                loadDaftarPelatih();
            }
        }
        
        // Load daftar pelatih
        function loadDaftarPelatih() {
            const daftarElement = document.getElementById('daftarPelatih');
            const selectElement = document.getElementById('pilihPelatih');
            
            daftarElement.innerHTML = '';
            selectElement.innerHTML = '<option value="">Pilih Pelatih</option>';
            
            pelatih.forEach(p => {
                // Untuk tabel
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${p.nama}</td>
                    <td>${p.posisi}</td>
                    <td>
                        <button onclick="hapusPelatih(${p.id})" style="background: ${getComputedStyle(document.documentElement).getPropertyValue('--accent')}; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                `;
                daftarElement.appendChild(tr);
                
                // Untuk dropdown
                const option = document.createElement('option');
                option.value = p.id;
                option.textContent = `${p.nama} (${p.posisi})`;
                selectElement.appendChild(option);
            });
        }
        
        // Simpan absensi
        function simpanAbsensi() {
            if (!settings.tanggal || !settings.sekolah) {
                alert('Harap set tanggal dan lokasi latihan terlebih dahulu!');
                return;
            }
            
            const pelatihId = parseInt(document.getElementById('pilihPelatih').value);
            const status = document.getElementById('statusAbsensi').value;
            
            if (!pelatihId) {
                alert('Harap pilih pelatih!');
                return;
            }
            
            const pelatihData = pelatih.find(p => p.id === pelatihId);
            if (!pelatihData) {
                alert('Data pelatih tidak ditemukan!');
                return;
            }
            
            const now = new Date();
            const waktu = now.toLocaleTimeString('id-ID');
            
            // Simpan ke absensi hari ini
            const keyHari = settings.tanggal;
            if (!absensiHariIni[keyHari]) {
                absensiHariIni[keyHari] = {};
            }
            
            absensiHariIni[keyHari][pelatihId] = {
                status: status,
                waktu: waktu,
                sekolah: settings.sekolah,
                keterangan: settings.keterangan || ''
            };
            
            // Simpan ke riwayat
            if (!riwayatAbsensi[keyHari]) {
                riwayatAbsensi[keyHari] = {
                    sekolah: settings.sekolah,
                    keterangan: settings.keterangan || '',
                    absensi: {}
                };
            }
            
            riwayatAbsensi[keyHari].absensi[pelatihId] = {
                status: status,
                waktu: waktu
            };
            
            simpanData();
            loadAbsensiHariIni();
            
            alert(`Absensi ${pelatihData.nama} berhasil disimpan!`);
        }
        
        // Load absensi hari ini
        function loadAbsensiHariIni() {
            const tbody = document.getElementById('tabelAbsensi');
            tbody.innerHTML = '';
            
            const keyHari = settings.tanggal;
            if (!keyHari || !absensiHariIni[keyHari]) return;
            
            Object.keys(absensiHariIni[keyHari]).forEach(pelatihId => {
                const absen = absensiHariIni[keyHari][pelatihId];
                const pelatihData = pelatih.find(p => p.id === parseInt(pelatihId));
                
                if (pelatihData) {
                    const tr = document.createElement('tr');
                    
                    let statusClass = 'status-hadir';
                    if (absen.status === 'Tidak Hadir') statusClass = 'status-tidak';
                    if (absen.status === 'Izin') statusClass = 'status-izin';
                    
                    tr.innerHTML = `
                        <td>${pelatihData.nama}</td>
                        <td><span class="${statusClass}">${absen.status}</span></td>
                        <td>${absen.waktu}</td>
                    `;
                    
                    tbody.appendChild(tr);
                }
            });
        }
        
        // Tampilkan riwayat dengan filter
        function tampilkanRiwayat() {
            const filterTanggal = document.getElementById('filterTanggal').value;
            const filterSekolah = document.getElementById('filterSekolah').value;
            const container = document.getElementById('riwayatContainer');
            
            container.innerHTML = '';
            
            // Urutkan tanggal descending (yang terbaru pertama)
            const sortedDates = Object.keys(riwayatAbsensi).sort((a, b) => {
                return new Date(b) - new Date(a);
            });
            
            let foundData = false;
            
            sortedDates.forEach(tanggal => {
                const data = riwayatAbsensi[tanggal];
                
                // Filter berdasarkan tanggal
                if (filterTanggal && tanggal !== filterTanggal) return;
                
                // Filter berdasarkan sekolah
                if (filterSekolah && data.sekolah !== filterSekolah) return;
                
                foundData = true;
                
                const formattedDate = new Date(tanggal).toLocaleDateString('id-ID', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
                
                const riwayatItem = document.createElement('div');
                riwayatItem.className = 'riwayat-item';
                
                let content = `
                    <div class="riwayat-tanggal">${formattedDate}</div>
                    <div class="riwayat-sekolah">${data.sekolah}</div>
                    ${data.keterangan ? `<div style="margin: 8px 0;">${data.keterangan}</div>` : ''}
                    <table>
                        <thead>
                            <tr>
                                <th>Nama Pelatih</th>
                                <th>Status</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                `;
                
                Object.keys(data.absensi).forEach(pelatihId => {
                    const absen = data.absensi[pelatihId];
                    const pelatihData = pelatih.find(p => p.id === parseInt(pelatihId));
                    
                    if (pelatihData) {
                        let statusClass = 'status-hadir';
                        if (absen.status === 'Tidak Hadir') statusClass = 'status-tidak';
                        if (absen.status === 'Izin') statusClass = 'status-izin';
                        
                        content += `
                            <tr>
                                <td>${pelatihData.nama}</td>
                                <td><span class="${statusClass}">${absen.status}</span></td>
                                <td>${absen.waktu}</td>
                            </tr>
                        `;
                    }
                });
                
                content += `
                        </tbody>
                    </table>
                `;
                
                riwayatItem.innerHTML = content;
                container.appendChild(riwayatItem);
            });
            
            if (!foundData) {
                container.innerHTML = '<p style="text-align: center; padding: 20px; color: #666;">Tidak ada data absensi yang sesuai dengan filter.</p>';
            }
        }
        
        // Ekspor data ke CSV
        function eksporData() {
            if (Object.keys(riwayatAbsensi).length === 0) {
                alert('Tidak ada data absensi untuk diekspor!');
                return;
            }
            
            let csvContent = "Tanggal,Sekolah,Keterangan,Pelatih,Posisi,Status,Waktu\n";
            
            Object.keys(riwayatAbsensi).forEach(tanggal => {
                const data = riwayatAbsensi[tanggal];
                
                Object.keys(data.absensi).forEach(pelatihId => {
                    const absen = data.absensi[pelatihId];
                    const pelatihData = pelatih.find(p => p.id === parseInt(pelatihId));
                    
                    if (pelatihData) {
                        const escapedKeterangan = data.keterangan ? `"${data.keterangan.replace(/"/g, '""')}"` : '';
                        csvContent += `"${tanggal}","${data.sekolah}",${escapedKeterangan},"${pelatihData.nama}","${pelatihData.posisi}","${absen.status}","${absen.waktu}"\n`;
                    }
                });
            });
            
            const encodedUri = encodeURI("data:text/csv;charset=utf-8," + csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", `absensi_pelatih_${new Date().toISOString().split('T')[0]}.csv`);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
        
        // Hapus semua data
        function hapusSemuaData() {
            if (confirm('Apakah Anda yakin ingin menghapus SEMUA data? Tindakan ini tidak dapat dibatalkan!')) {
                localStorage.clear();
                pelatih = [];
                absensiHariIni = {};
                riwayatAbsensi = {};
                settings = {};
                
                alert('Semua data berhasil dihapus!');
                location.reload();
            }
        }
        
        // Simpan data ke localStorage
        function simpanData() {
            localStorage.setItem('pelatih', JSON.stringify(pelatih));
            localStorage.setItem('absensiHariIni', JSON.stringify(absensiHariIni));
            localStorage.setItem('riwayatAbsensi', JSON.stringify(riwayatAbsensi));
            localStorage.setItem('settings', JSON.stringify(settings));
        }
        
        // Jalankan inisialisasi saat halaman dimuat
        window.onload = init;
    </script>
</body>
</html>