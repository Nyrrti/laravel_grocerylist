@extends('layouts.app')

@section('title', 'Page Title')
    
@section('content')
    <div class="col-12 main-container p-2">
         <table class="border">
            <colgroup>
                <col class="">
                <col class="table-w-45">
                <col class="">
                <col class="table-w-12">
                <col class="table-w-12">
            </colgroup>
            <thead>
                <tr>
                    <th class="py-4" colspan="3">
                        <h2 class="dark-orange m-0">
                            Items
                        </h2>
                    </th> 
                    <th class="text-end" colspan="2">
                        <a class="btn add" href="{{ route('items.create') }}">
                            Add+
                        </a>
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
                        Category:
                    </th>
                    <th class="table-title text-center">
                        Actions:
                    </th>
                    <th class="table-title text-center">
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
                            {{ $item->category->name }}
                        </td>
                        <td class="border-bottom text-center">
                            <a class="btn edit" href="{{ route('items.edit', $item->id) }}">
                                Edit
                            </a>
                        </td>
                        <td class="border-bottom text-center">
                            <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn delete" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection