<!-- resources/views/profile/edit.blade.php -->
<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name', $user->name) }}" required>

    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email', $user->email) }}" required>

    <button type="submit">Save Changes</button>
</form>
