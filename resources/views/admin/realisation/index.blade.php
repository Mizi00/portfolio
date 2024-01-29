@extends('layouts.app')

@section('body')
<x-admin.navbar />


<div class="table-div">
    <table class="table-realisation">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Aziz</th>
            <th>ZEZE</th>
        </thead>
        <tbody class="table-body">
            @for($i=1; $i<=6; $i++)
                <tr>
                    <th>{{ $i }}</th>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>$320,800</td>
                    <td>efefefef</td>
                    <td><a href="#">Voir</a></td>
                </tr>
            @endfor
            
        </tbody>
    </table>
</div>