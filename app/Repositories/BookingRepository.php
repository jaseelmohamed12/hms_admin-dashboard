// app/Repositories/BookingRepository.php
namespace App\Repositories;

use App\Models\Booking;
use App\Repositories\Interfaces\BookingRepositoryInterface;

class BookingRepository implements BookingRepositoryInterface
{
    public function all()
    {
        return Booking::with('customer')->latest()->get();
    }

    public function create(array $data)
    {
        return Booking::create($data);
    }
}
