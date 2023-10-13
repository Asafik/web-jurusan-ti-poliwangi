<?php

namespace App\Http\Controllers\Web\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\Cooperation;
use App\Models\Document;
use App\Models\Employee;
use App\Models\EmployeeType;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\AchievementType;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
        ];

        return view('frontend.home.index', $data);
    }
    public function cooperation()
    {
        $data = [
            'title' => 'Kerjasama Industri',
            'cooperations' => Cooperation::with(['cooperationField', 'cooperationType', 'partner'])->where('is_publish', true)->get()
        ];

        return view('frontend.home.cooperation', $data);
    }
    public function employee()
    {
        $data = [
            'title' => 'Dosen dan Staff',
            'employees' => EmployeeType::with(['employee'])->get(),
        ];

        return view('frontend.home.employee', $data);
    }
    public function document()
    {
        $data = [
            'title' => 'Dokumen',
            'documents' => Document::with(['documentType'])->where('is_publish', true)->get(),
        ];

        return view('frontend.home.document', $data);
    }

    //Berita
    public function event($slug)
    {
        $event = Event::where(['slug' => $slug, 'is_publish' => true])->first();
        if ($event) {
            $data = [
                'title' => $event->title,
                'event' => $event,
            ];

            return view('frontend.home.event', $data);
        } else {
            abort(404);
        }
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil Jurusan',
        ];

        return view('frontend.home.profil', $data);
    }
  	public function sejarah()
    {
        $data = [
            'title' => 'Sejarah',
        ];

        return view('frontend.home.sejarah', $data);
    }
  	public function visimisi()
    {
        $data = [
            'title' => 'Visi dan Misi',
        ];

        return view('frontend.home.visimisi', $data);
    }
  	public function organisasi()
    {
        $data = [
            'title' => 'Struktur Organisasi',
        ];

        return view('frontend.home.organisasi', $data);
    }
  	public function trpl()
    {
        $data = [
            'title' => 'S1 Terapan Teknik Rekayasa Perangkat Lunak',
        ];

        return view('frontend.home.trpl', $data);
    }
  	public function trk()
    {
        $data = [
            'title' => 'S1 Terapan Rekayasa Komputer',
        ];

        return view('frontend.home.trk', $data);
    }
  	public function bsd()
    {
        $data = [
            'title' => 'S1 Terapan Bisnis Digital',
        ];

        return view('frontend.home.bsd', $data);
    }
	public function ormawa()
    {
        $data = [
            'title' => 'Organisasi Kemahasiswaan',
        ];

        return view('frontend.home.ormawa', $data);
    }

    public function presma()
    {
        $data = [
            'title' => 'Prestasi Mahasiswa',
            'achievements' => AchievementType::with(['achievement'])->get(),

        ];
        return view('frontend.home.presma', $data);
    }


    public function kalender()
    {
        $data = [
            'title' => 'Kalender Akademik',
        ];

        return view('frontend.home.kalender', $data);
    }
    public function peraturan()
    {
        $data = [
            'title' => 'Peraturan Akademik',
        ];

        return view('frontend.home.peraturan', $data);
    }

    public function biaya()
    {
        $data = [
            'title' => 'Biaya Pendidikan',
        ];

        return view('frontend.home.biaya', $data);
    }
    public function kehidupan()
    {
        $data = [
            'title' => 'Kehidupan Kampus',
        ];

        return view('frontend.home.kehidupan', $data);
    }

    public function beasiswa()
    {
        $data = [
            'title' => 'Beasiswa',
        ];

        return view('frontend.home.beasiswa', $data);
    }

    public function jalurmasuk()
    {
        $data = [
            'title' => 'Jalur Masuk',
        ];

        return view('frontend.home.jalurmasuk', $data);
    }

    public function pedoman()
    {
        $data = [
            'title' => 'Pedoman Akademik',
        ];

        return view('frontend.home.pedoman', $data);
    }

    public function sambutan()
    {
        $data = [
            'title' => 'Sambutan Kajur',
        ];

        return view('frontend.home.sambutan', $data);
    }

    public function petakampus()
    {
        $data = [
            'title' => 'Peta Kampus',
        ];

        return view('frontend.home.petakampus', $data);
    }

    public function agenda()
    {
        $data = [
            'title' => 'Agenda',
        ];

        return view('frontend.home.agenda', $data);
    }
    public function mandiri()
    {
        $data = [
            'title' => 'Mandiri',
        ];

        return view('frontend.home.mandiri', $data);
    }
    public function ubtksnbt()
    {
        $data = [
            'title' => 'UBTK-SNBT',
        ];

        return view('frontend.home.ubtksnbt', $data);
    }
    public function snbp()
    {
        $data = [
            'title' => 'SNBP',
        ];

        return view('frontend.home.snbp', $data);
    }

    public function detail($slug){
        $employee = Employee::where('slug', $slug)->first();
        $data = [
            'title' => $employee->name,
            'data' => $employee,
            'employeeType' => EmployeeType::all()
        ];

        return view('frontend.home.detail', $data);
    }


}
