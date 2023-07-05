@extends('backend\layouts\app')
@section('content')
<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pb-20 pt-20">
        <table class="data-table table stripe hover nowrap" id="MessagedataTable">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $key => $message)
                @if ($message['deleted'] != 1)
                <tr style="background: {{ $message['deleted'] == 1 ? 'darkgray' : 'white' }} !important;">
                    <td class="table-plus">{{ $message['hirename'] }}</td>
                    <td>{{ $message['hirephone'] }}</td>
                    <td>{{ $message['hireemail'] }}</td>
                    <td>{{ $message['hiremessage'] }}</td>
                    <td>
                        <form action="{{ route('message.destroy', $key) }}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit"
                                onclick="return confirm('Are you sure you want to delete this item?');"><i
                                    class="dw dw-delete-3"></i></button>
                        </form>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
