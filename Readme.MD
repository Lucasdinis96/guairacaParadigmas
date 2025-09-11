Trabalho final 1º Bimestre

Arquivos Criados:
    Migrations - paradigmas-prog-20252/database/migrations/2025_09_10_020725_create_company_table.php
    Seeder - paradigmas-prog-20252/database/seeders/CompanyTableSeeder.php
    Model - paradigmas-prog-20252/app/Models/Company.php
    Factory - paradigmas-prog-20252/database/factories/CompanyFactory.php
    Controller - paradigmas-prog-20252/app/Http/Controllers/Api/CompanyController.php
    Service - paradigmas-prog-20252/app/Http/Services/CompanyService.php
    Repository - paradigmas-prog-20252/app/Http/Repositories/CompanyRepository.php
    Create Request - paradigmas-prog-20252/app/Http/Requests/CreateCompanyRequest.php
    Update Request - paradigmas-prog-20252/app/Http/Requests/UpdateCompanyRequest.php

Arquivos modificados
    Rotas - paradigmas-prog-20252/routes/api.php
        Linhas adicionadas:
            13 Route::get('/companies', [CompanyController::class, 'index']);
            14 Route::post('/companies/create', [CompanyController::class, 'store']);
            15 Route::delete('/companies/{id}', [CompanyController::class, 'destroy']);
            16 Route::put('/companies/{id}', [CompanyController::class, 'update']);
            17 Route::get('/companies/{id}', [CompanyController::class, 'show']);