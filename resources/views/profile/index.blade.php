@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('bread_controller')
    <a href="index.html">Profile</a>
@endsection

@section('bread_action')
    index
@endsection

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Profiles
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($profiles as $key => $profile) {?>

                <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo $profile->name; ?></td>
                </tr>

                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
@endsection
