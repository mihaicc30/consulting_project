namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\EzepostUser;

class UniqueUsername implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if the username is already used
        $existingUser = EzepostUser::where('username', $value)->first();
        return !$existingUser;
    }

    public function message()
    {
        return 'Username is already taken. Please choose a different username.';
    }
}