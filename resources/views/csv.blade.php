<table>
    <tbody>
        @foreach ($files as $file)
        <tr>
            <td>{{ $file }}</td>
        </tr>
        @endforeach
    </tbody>
</table>