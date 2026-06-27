@extends('layouts.app')

@section('title', 'Page Title')
    
@section('content')
    <div class="col-12 main-container p-2 mt-4">
         <table class="border">
            <colgroup>
                <col class="">
                <col class="table-w-40">
                <col class="table-w-15">
                <col class="table-w-15">
            </colgroup>
            <thead>
                <tr>
                    <th class="" colspan="4">
                        <h2 class="text-center dark-orange m-0">
                            Items
                        </h2>
                    </th>   
                </tr>
                <tr>
                    <th class="table-title">
                        Name:
                    </th>
                    <th class="table-title">
                        Description:
                    </th>
                    <th class="table-title">
                        Actions:
                    </th>
                    <th class="table-title">
                        Actions:
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td class="border-bottom">
                            {{ $item->name }}
                        </td>
                        <td class="border-bottom">
                            {{ $item->description }}
                        </td>
                        <td class="border-bottom">
                            Edit/Delete
                        </td>
                        <td class="border-bottom">
                            <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection