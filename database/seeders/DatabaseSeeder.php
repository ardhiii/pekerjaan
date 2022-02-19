<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Job;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin1@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'tautan' => 'https://linkedin.com/',
            'pp' => 'img/tw.png'
        ]);

        User::create([
            'name' => 'Pekerjaan.ID',
            'email' => 'posel@pekerjaan.id',
            'username' => 'pekerjaan_id',
            'password' => bcrypt('123456'),
            'tautan' => 'https://instagram.com/pekerjaan.id',
            'pp' => 'img/p.svg'
        ]);

        Job::create([
            'logo' => 'job/job-logos/id.png',
            'job_type' => 'Purnawaktu',
            'title' => 'Laravel Developer',
            'slug' => 'laravel-developer',
            'name' => 'Inmotion Digital',
            'registration_time' => 'Secepatnya',
            'loc' => 'Jakarta, Bandung',
            'method' => 'Ke Kantor & Daring',
            'company_type' => 'Permainan Komputer',
            'education' => 'S-1',
            'major' => 'Informatika',
            'criteria' => 'Memahami kerangka kerja Laravel 8.',
            'description' => '',
            'apply' => 'Lamar melalui imotion.web.id',
            'cp' => '',
            'legal_name' => 'Inmotion Digital',
            'address' => '',
            'district' => '',
            'city' => 'Bandung',
            'province' => 'Jawa Barat',
            'employees' => '11-50',
            'profile' => 'iNMOTION is a digital creative studio. We develop games (2D/3D) and apps for mobile, web, desktop, and also custom platforms such as for event support, public space, and e-learning.',
            'source' => 'https://inmotion.web.id',
            'flyer'  => 'img/id.png',
            'user_id' => '2'
        ]);

        Job::create([
            'logo' => 'job/job-logos/smsg.png',
            'job_type' => 'Magang',
            'title' => 'Programmer - Coder for Good (Think.web)',
            'slug' => 'programmer-coder-for-good-think-web',
            'name' => 'Semua Murid Semua Guru',
            'registration_time' => '22 Juni - 30 Juli 2021',
            'loc' => 'Jakarta, Bandung, Ambon',
            'method' => 'Ke Kantor & Daring',
            'company_type' => 'Pendidikan',
            'education' => 'minimal mahasiswa tingkat 3 D-4 / S-1',
            'major' => 'Komputer / Tehnik Informatika',
            'criteria' => '-',
            'description' => 'Program ini dirancang untuk membekali mahasiswa dengan pengetahuan yang praktis dan aplikatif untuk bisa membuat atau merekomendasikan solusi platform teknologi untuk memperlancar kampanye sosial',
            'apply' => 'Lamar hanya melalui situs web https://kampusmerdeka.kemdikbud.go.id/activity/active/detail/93158',
            'cp' => '-',
            'legal_name' => 'Perkumpulan Integrasi Kolaborasi dan Inovasi Pendidikan',
            'address' => 'Sekretariat Semua Murid Semua Guru (SMSG)
            Rumah Wijaya
            Jl. Wijaya V No.6, RT.3/RW.5, Melawai',
            'district' => 'Cilandak',
            'city' => 'Jakarta Selatan',
            'province' => 'DKI Jakarta',
            'employees' => '11-50',
            'profile' => 'Semua Murid Semua Guru: jaringan penggerak pendidikan yang memfasilitasi proses integrasi, kolaborasi, dan inovasi antar pemangku kepentingan pendidik.',
            'source' => 'https://kampusmerdeka.kemdikbud.go.id/activity/active/detail/93158',
            'flyer'  => 'img/smsg.png',
            'user_id' => '1'
        ]);

        Job::create([
            'logo' => 'job/job-logos/tw.png',
            'job_type' => 'Magang',
            'title' => 'Web Developer',
            'slug' => 'web-developer',
            'name' => 'Think.Web',
            'registration_time' => '22 Juni - 30 Juli 2021',
            'loc' => 'Jakarta, Bandung',
            'method' => 'Daring',
            'company_type' => 'Internet',
            'education' => 'minimal mahasiswa tingkat 3 D-4 / S-1',
            'major' => 'Komputer / Tehnik Informatika',
            'criteria' => '-',
            'description' => 'Program ini dirancang untuk membekali mahasiswa dengan pengetahuan yang praktis dan aplikatif untuk bisa membuat atau merekomendasikan solusi platform teknologi untuk memperlancar kampanye sosial',
            'apply' => 'Lamar hanya melalui situs web https://kampusmerdeka.kemdikbud.go.id/activity/active/detail/93158',
            'cp' => '-',
            'legal_name' => 'PT. Thinksmart Ide Brajendra',
            'address' => 'Ruko Golden Plaza Fatmawati (Lotte Fatmawati) Blok E No. 41-42',
            'district' => 'Cilandak',
            'city' => 'Jakarta Selatan',
            'province' => 'DKI Jakarta',
            'employees' => '11-50',
            'profile' => 'Think.Web adalah salah satu komunitas/organisasi pendidikan di Jaringan Semua Murid Semua Guru (SMSG).
            Think.Web merupakan Digital & Impact Agency yang membantu brand, perusahaan, organisasi dan menciptakan dampak dalam marketing, branding maupun sosial melalui media digital.',
            'source' => 'https://kampusmerdeka.kemdikbud.go.id/activity/active/detail/93158',
            'flyer'  => 'img/tw.png',
            'user_id' => '1'
        ]);

        Job::create([
            'logo' => 'job/job-logos/tw.png',
            'job_type' => 'Purnawaktu',
            'title' => 'Blockchain Developer',
            'slug' => 'blockchain-developer',
            'name' => 'Think.Web',
            'registration_time' => 'Secepatnya',
            'loc' => 'Jakarta, Bandung',
            'method' => 'Ke Kantor & Daring',
            'company_type' => 'Internet',
            'education' => '-',
            'major' => '-',
            'criteria' => 'Dapat membuat program blockchain.',
            'description' => 'Lorem',
            'apply' => 'Lamar hanya melalui media sosial LinkedIn kami.',
            'cp' => '-',
            'legal_name' => 'PT. Thinksmart Ide Brajendra',
            'address' => 'Ruko Golden Plaza Fatmawati (Lotte Fatmawati) Blok E No. 41-42',
            'district' => 'Cilandak',
            'city' => 'Jakarta Selatan',
            'province' => 'DKI Jakarta',
            'employees' => '11-50',
            'profile' => 'Think.Web merupakan Digital & Impact Agency yang membantu brand, perusahaan, organisasi dan menciptakan dampak dalam marketing, branding maupun sosial melalui media digital.',
            'source' => 'https://linkedin.com/company/think.web/jobs',
            'flyer'  => 'img/tw.png',
            'user_id' => '1'
        ]);

        Job::create([
            'logo' => 'job/job-logos/d.png',
            'job_type' => 'Purnawaktu',
            'title' => 'Chief Technology Officer (CTO)',
            'slug' => 'chief-technology-officer-cto',
            'name' => 'Digify.us',
            'registration_time' => '22 Juni - 30 Juli 2021',
            'loc' => 'Jakarta Selatan',
            'method' => 'Ke Kantor & Daring',
            'company_type' => 'Layanan & Teknologi Informasi',
            'education' => 'Lulusan SMA/SMK',
            'major' => 'MIPA / IT',
            'criteria' => '-',
            'description' => 'Memanggil putra-putri terbaik bangsa untuk bergabung menjadi pimpinan bersama kami.',
            'apply' => 'Lamar hanya melalui media sosial LinkedIn Digify.us.',
            'cp' => '-',
            'legal_name' => 'Digify.us',
            'address' => 'Ruko Golden Plaza Fatmawati (Lotte Fatmawati) Blok E No. 41-42',
            'district' => 'Cilandak',
            'city' => 'Jakarta Selatan',
            'province' => 'DKI Jakarta',
            'employees' => '2-10',
            'profile' => 'Now days all things is required to achieve in smarter way, Corporate or Brand Identity is being communicate extensively, what way is better way to communicate it, Digital is the smartest way to communicate .',
            'source' => 'https://www.linkedin.com/company/digify-id/',
            'flyer'  => 'img/d.png',
            'user_id' => '1'
        ]);

        Job::create([
            'logo' => 'job/job-logos/id.png',
            'job_type' => 'Purnawaktu',
            'title' => '3D Designer',
            'slug' => '3d-designer',
            'name' => 'Inmotion Digital',
            'registration_time' => '22 Juni - 30 Juli 2021',
            'loc' => 'Bandung',
            'method' => 'Daring',
            'company_type' => 'Permainan Komputer',
            'education' => 'Lulusan S-1',
            'major' => 'Seni Rupa dan Desain',
            'criteria' => '-',
            'description' => 'Tugas utama yaitu membuat desain 3 dimensi bersama untuk proyek pembuatan metaverse.',
            'apply' => 'Lamar hanya melalui media sosial LinkedIn Inmotion Digital.',
            'cp' => '-',
            'legal_name' => 'Inmotion Digital',
            'address' => '-',
            'district' => '-',
            'city' => 'Bandung',
            'province' => 'Jawa Barat',
            'employees' => '11-50',
            'profile' => 'iNMOTION is a digital creative studio. We develop games (2D/3D) and apps for mobile, web, desktop, and also custom platforms such as for event support, public space, and e-learning.',
            'source' => 'https://www.linkedin.com/company/inmotion-digital/',
            'flyer'  => 'img/id.png',
            'user_id' => '1'
        ]);

        Job::create([
            'logo' => 'job/job-logos/dl.png',
            'job_type' => 'Magang',
            'title' => 'Copywriter',
            'slug' => 'copywriter',
            'name' => 'Difalink.com',
            'registration_time' => '22 Juni - 30 Juli 2021',
            'loc' => 'Bali',
            'method' => 'Daring',
            'company_type' => 'Recruiter',
            'education' => 'minimal mahasiswa aktif semester 5 D-4 / S-1',
            'major' => 'Semua Jurusan',
            'criteria' => '-',
            'description' => '-',
            'apply' => 'Lamar hanya melalui media sosial LinkedIn Difalink.com.',
            'cp' => '-',
            'legal_name' => 'Difalink.com',
            'address' => '-',
            'district' => '-',
            'city' => 'Kuta',
            'province' => 'Bali',
            'employees' => '2-10',
            'profile' => 'Jaringan kerja disabilitas yang mewujudkan dunia kerja lebih inklusif di Indonesia.',
            'source' => 'https://www.linkedin.com/company/difalink/',
            'flyer'  => 'img/dl.jpg',
            'user_id' => '1'
        ]);

        Job::create([
            'logo' => 'job/job-logos/s.svg',
            'job_type' => 'Purnawaktu',
            'title' => 'ShopeePay Frontend Engineer [Entry Level] - NEW',
            'slug' => 'shopeepay-frontend-engineer-entry-level-new',
            'name' => 'Shopee',
            'registration_time' => 'Secepatnya',
            'loc' => 'Jakarta Selatan',
            'method' => 'Ke Kantor',
            'company_type' => 'Internet',
            'education' => 'S-1',
            'major' => 'Ilmu Komputer atau sejenis',
            'criteria' => 'Less than 1 year of experience welcomed
            Passionate about coding and programming, innovation, and solving challenging problems
            Strong knowledge in JavaScript fundamentals
            Well versed in various browser technologies
            Love technologies
            Enjoy teamwork
            Hands-on experiences and knowledge about React JS (preferred)
            Experience in writing type-safe code with Flow or TypeScript (preferred)',
            'description' => 'We are a team of Engineers who build and maintain features and systems for ShopeePay. We constantly work on introducing more effective payment functionalities to both internal businesses and external merchants. Together we aim to reach the forefront of technology for payment methods, promoting the cashless lifestyle to various groups of people across SEA.

            This role would involve working with some of the most talented minds in the world, collaborating with fellow Developers, Product Managers, User Experience Designers and Operation Engineers to build products with cutting-edge technologies.
            
            Job Description:
            Design and implement leading platform used and loved by hundreds of millions of users
            Implement solutions to complex and flexible business features
            Maintain and improve our high-quality in-house JavaScript libraries and toolsets, for example a complete React UI framework following our design guidelines
            Participate in extensive and candid code review with peers
            Participate in regular internal technology sharing and other regional tech events',
            'apply' => 'Lamar hanya melalui media sosial LinkedIn Shopee.',
            'cp' => '-',
            'legal_name' => 'PT. Shopee Indonesia Internasional',
            'address' => '-',
            'district' => '-',
            'city' => 'Jakarta',
            'province' => 'DKI Jakarta',
            'employees' => '5.001-10.000',
            'profile' => 'Shopee is the leading e-commerce platform in Southeast Asia and Taiwan. It is a platform tailored for the region, providing customers with an easy, secure and fast online shopping experience through strong payment and logistical support.

            Shopee aims to continually enhance its platform and become the region’s e-commerce destination of choice via ongoing product optimisation and localised user-centered strategies.',
            'source' => 'https://www.linkedin.com/jobs/collections/recommended/?currentJobId=2798278939',
            'flyer'  => 'img/s.jpg',
            'user_id' => '1'
        ]);

        Job::create([
            'logo' => 'job/job-logos/p.svg',
            'job_type' => 'Sukarela',
            'title' => 'Komisaris Utama & Komisaris Independen',
            'slug' => 'komisaris-utama-komisaris-independen',
            'name' => 'Pekerjaan.id',
            'registration_time' => 'Secepatnya',
            'loc' => 'Jakarta Selatan, Bogor',
            'method' => 'Ke Kantor & Daring',
            'company_type' => 'Internet',
            'education' => 'S-1',
            'major' => 'Semua Jurusan',
            'criteria' => 'Berpenampilan menarik.',
            'description' => 'tidak ada.',
            'apply' => 'Lamar hanya melalui situs web Pekerjaan.id.',
            'cp' => '+628',
            'legal_name' => 'PT. Pekerjaan Indonesia Maju',
            'address' => 'belom ada',
            'district' => 'Cilandak',
            'city' => 'Jakarta Selatan',
            'province' => 'DKI Jakarta',
            'employees' => '5.001-10.000',
            'profile' => 'Pekerjaan.id adalah perusahaan yang memiliki visi untuk mewujudkan Indonesia bebas pengangguran.',
            'source' => 'https://pekerjaan.id/detail/7',
            'flyer'  => 'img/p.svg',
            'user_id' => '2'
        ]);
    }
}
