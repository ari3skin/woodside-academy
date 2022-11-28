<x-mail::message>
    # Application for your Lecturer Position

    Dear {{$firstname}} {{$lastname}},
    It is with utmost pleasure that I write to you on behalf of Woodside Academy to inform you of your acceptance and
    hiring into the {{$course}} course at the {{$faculty}}.
    The course is scheduled to start on 1st January 2023.

    <x-mail::button :url="'http://127.0.0.1:8000/lecturer/register'">
        Complete your Registration
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
