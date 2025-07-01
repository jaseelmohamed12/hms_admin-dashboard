namespace App\Repositories\Interfaces;

interface CustomerRepositoryInterface
{
    public function paginateWithSearch(string $search = null, int $perPage = 10);
}
