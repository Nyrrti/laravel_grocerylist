@extends('layouts.app')

@section('title', 'Page Title')
    
@section('content')
    <div class="col-12 main-container p-2">
         <table class="border">
            <colgroup>
                <col class="">
                <col class="table-w-50">
                <col class="">
                <col class="table-w-5">
                <col class="table-w-5">
            </colgroup>
            <thead>
                <tr>
                    <th class="py-4" colspan="2">
                        <h2 class="dark-orange m-0">
                            Items
                        </h2>
                    </th> 
                    <th class="text-end" colspan="3">
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
                    <th class="table-title text-center" colspan="2">
                        Actions:
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td class="border-bottom bold">
                            {{ $item->name }}
                        </td>
                        <td class="border-bottom">
                            {{ $item->description }}
                        </td>
                        <td class="border-bottom">
                            {{ $item->category->name }}
                        </td>
                        <td class="border-bottom">
                            <div class="action-cell-wrap">
                                <a class="btn icon edit" href="{{ route('items.edit', $item->id) }}" aria-label="Edit">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                    </svg>
                                </a>
                            </div>
                        </td>
                        <td class="border-bottom">
                            <div class="action-cell-wrap">
                                <form action="{{ route('items.destroy', $item->id) }}" method="POST" aria-label="Delete">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn icon delete" type="submit">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M3 6h18"/>
                                            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                                            <path d="M10 11v6"/>
                                            <path d="M14 11v6"/>
                                            <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                        </svg>  
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection