<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ApplicantdatamanagerTableSeeder::class);
        $this->call(AcademiceducationTableSeeder::class);
        $this->call(BankingdetailTableSeeder::class);
        $this->call(DeclarationTableSeeder::class);
        $this->call(DependantTableSeeder::class);
        $this->call(EmploymenthistoryTableSeeder::class);
        $this->call(EmploymentselfassessmentTableSeeder::class);
        $this->call(FullselfdisclosureTableSeeder::class);
        $this->call(GeneralTableSeeder::class);
        $this->call(GuardianTableSeeder::class);
        $this->call(HobbyTableSeeder::class);
        $this->call(HometownaddressTableSeeder::class);
        $this->call(NationalserviceTableSeeder::class);
        $this->call(NextofkinTableSeeder::class);
        $this->call(ParentsTableSeeder::class);
        $this->call(ProfessionalmembershipTableSeeder::class);
        $this->call(ProfessionalqualificationTableSeeder::class);
        $this->call(RefereeTableSeeder::class);
        $this->call(ResidentialaddressTableSeeder::class);
        $this->call(SchoolleavingcertificateTableSeeder::class);
        $this->call(SocialmembershipTableSeeder::class);
        $this->call(SportTableSeeder::class);
    }
}
