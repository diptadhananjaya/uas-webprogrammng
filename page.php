<?php

$page = $_GET['page'];
switch ($page) {
	case 'login':
		include 'login.php';
		break;
	case 'login-proses':
		include 'controller/LoginController.php';
		break;

		// Page Admin
	case 'home':
		include 'views/home.php';
		break;


		// Jurusan
	case 'data-jurusan':
		include 'views/data-jurusan.php';
		break;
	case 'add-data-jurusan':
		include 'views/add-data-jurusan.php';
		break;
	case 'store-jurusan':
		include 'controller/JurusanController.php';
		break;
	case 'edit-data-jurusan':
		include 'views/edit-data-jurusan.php';
		break;
	case 'update-jurusan':
		include 'controller/JurusanController.php';
		break;
	case 'delete-data-jurusan':
		include 'controller/JurusanController.php';
		break;

		// Dosen
	case 'data-dosen':
		include 'views/data-dosen.php';
		break;
	case 'add-data-dosen':
		include 'views/add-data-dosen.php';
		break;
	case 'store-dosen':
		include 'controller/DosenController.php';
		break;
	case 'edit-data-dosen':
		include 'views/edit-data-dosen.php';
		break;
	case 'update-dosen':
		include 'controller/DosenController.php';
		break;
	case 'delete-data-dosen':
		include 'controller/DosenController.php';
		break;
	case 'search-dosen':
		include 'controller/DosenController.php';
		break;
	case 'display-data-dosen':
		include 'views/display-data-dosen.php';
		break;

		// Mahasiswa
	case 'data-mahasiswa':
		include 'views/data-mahasiswa.php';
		break;
	case 'add-data-mahasiswa':
		include 'views/add-data-mahasiswa.php';
		break;
	case 'store-mahasiswa':
		include 'controller/MahasiswaController.php';
		break;
	case 'edit-data-mahasiswa':
		include 'views/edit-data-mahasiswa.php';
		break;
	case 'update-mahasiswa':
		include 'controller/MahasiswaController.php';
		break;
	case 'delete-data-mahasiswa':
		include 'controller/MahasiswaController.php';
		break;
	case 'search-mahasiswa':
		include 'controller/MahasiswaController.php';
		break;
	case 'display-data-mahasiswa':
		include 'views/display-data-mahasiswa.php';
		break;

		// Pengumuman
	case 'pengumuman':
		include 'views/pengumuman.php';
		break;
	case 'add-pengumuman':
		include 'views/add-pengumuman.php';
		break;
	case 'store-pengumuman':
		include 'controller/PengumumanController.php';
		break;
	case 'edit-pengumuman':
		include 'views/edit-pengumuman.php';
		break;
	case 'update-pengumuman':
		include 'controller/PengumumanController.php';
		break;
	case 'delete-pengumuman':
		include 'controller/PengumumanController.php';
		break;

		// Form Akademik

		// Cuti
	case 'data-form-cuti':
		include 'views/data-form-akademik-cuti.php';
		break;
	case 'print-form-cuti':
		include 'views/print-form-akademik-cuti.php';
		break;
	case 'form-cuti-setuju':
		include 'controller/FormAkademikCutiController.php';
		break;
	case 'print-izin-cuti':
		include 'views/print-izin-cuti.php';
		break;

		// Sakit dan Dispensasi
	case 'data-form-sakit-dispensasi':
		include 'views/data-form-akademik-sakit-dispensasi.php';
		break;
	case 'print-form-sakit-dispensasi':
		include 'views/print-form-akademik-sakit-dispensasi.php';
		break;

		// Pemutihan Cuti
	case 'data-form-pemutihan-cuti':
		include 'views/data-form-akademik-pemutihan-cuti.php';
		break;
	case 'print-form-pemutihan-cuti':
		include 'views/print-form-akademik-pemutihan-cuti.php';
		break;

		// Keterangan Aktif Kuliah
	case 'data-form-keterangan-aktif-kuliah':
		include 'views/data-form-akademik-keterangan-aktif-kuliah.php';
		break;
	case 'print-form-keterangan-aktif-kuliah':
		include 'views/print-form-akademik-keterangan-aktif-kuliah.php';
		break;



		// End Page Admin

		// Page Mahasiswa
	case 'home-mhs':
		include 'views/home-mhs.php';
		break;
	case 'add-form-akademik-cuti':
		include 'views/add-data-form-akademik-cuti.php';
		break;
	case 'store-form-akademik-cuti':
		include 'controller/FormAkademikCutiController.php';
		break;
	case 'add-form-sakit-dispensasi':
		include 'views/add-data-form-sakit-dispensasi.php';
		break;
	case 'store-form-sakit-dispensasi':
		include 'controller/FormSakitDispensasiController.php';
		break;
	case 'add-form-pemutihan-cuti':
		include 'views/add-data-form-pemutihan-cuti.php';
		break;
	case 'store-form-pemutihan-cuti':
		include 'controller/FormPemutihanCutiController.php';
		break;


		// Aktif Kuliah
	case 'add-form-aktif-kuliah':
		include 'views/add-data-form-aktif-kuliah.php';
		break;
	case 'store-form-aktif-kuliah':
		include 'controller/FormAktifKuliahController.php';
		break;

	case 'data-form-aktif-kuliah':
		include 'views/data-form-aktif-kuliah.php';
		break;
	case 'print-form-aktif-kuliah':
		include 'views/print-form-aktif-kuliah.php';
		break;


	default:
		include 'views/home.php';
		break;
}
