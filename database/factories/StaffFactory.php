<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Staff::class;
    public function definition(): array
    {
        $jabatan = fake()->randomElement([
            'Kepala Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah',
            'Sekretaris Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah',
            'Kepala Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah',
            'Kepala Bidang Perekonomian, Sumber Daya Alam, Infrastruktur dan Kewilayahan',
            'Kepala Bidang Pemerintahan dan Pembangunan Manusia',
            'Kepala Bidang Penelitian dan Pengembangan',
            'Kasubag Umum dan Kepegawaian',
            'Perencana Ahli Muda',
            'Analis Keuangan Pusat dan Daerah Ahli Muda',
            'Staff lainnya',
        ]);

        // Ensure jabatan uniqueness except for "Staff lainnya"
        if ($jabatan !== 'Staff lainnya' && Staff::where('jabatan', $jabatan)->exists()) {
            return $this->definition(); // Try another jabatan if not unique
        }
        return [
            'nip' => fake()->unique()->numerify('##################'),
            'nama' => fake()->name(),
            'foto' => 'galeri/foto-profil/' . $this->faker->image('public/storage/galeri/foto-profil/', 150, 192, null, false),
            'jabatan' => $jabatan,
        ];
    }
}
