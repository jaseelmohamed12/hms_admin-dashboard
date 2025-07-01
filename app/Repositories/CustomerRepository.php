namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\Interfaces\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function paginateWithSearch(string $search = null, int $perPage = 10)
    {
        $query = Customer::query();

        if ($search) {
            $query->where('name', 'like', "%$search%");
        }

        return $query->paginate($perPage);
    }
}
