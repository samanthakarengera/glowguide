@extends('layouts.admin')

@section('content')

<div class="messages-page">

    <a href="{{ route('admin.dashboard') }}" class="back-button">
        ← Back to Dashboard
    </a>

    <div class="page-heading">

        <span>CONTACT</span>

        <h1>Messages</h1>

        <p>
            Here you can view messages sent by GlowGuide visitors.
        </p>

    </div>

    @if($messages->count() > 0)

        <div class="messages-list">

            @foreach($messages as $message)

                <div class="message-card">

                    <div class="message-header">

                        <div>
                            <span class="message-label">
                                FROM
                            </span>

                            {{-- Email van de bezoeker --}}
                            <h2>
                                {{ $message->email }}
                            </h2>
                        </div>

                        <span class="message-date">
                            {{ $message->created_at->format('d/m/Y H:i') }}
                        </span>

                    </div>


                    <div class="message-content">

                        <span class="message-label">
                            MESSAGE
                        </span>

                        {{-- Bericht van de bezoeker --}}
                        <p>
                            {{ $message->message }}
                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="empty-message">

            <h2>No messages yet ♡</h2>

            <p>
                Contact messages from visitors will appear here.
            </p>

        </div>

    @endif

</div>


<style>

.messages-page {
    max-width: 1000px;
    margin: 0 auto;
}

.back-button {
    display: inline-block;
    margin-bottom: 25px;
    background: #ffd6e7;
    color: #d46f97;
    padding: 10px 16px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
}

.back-button:hover {
    background: #ffc4dc;
}

.page-heading {
    text-align: center;
    margin-bottom: 35px;
}

.page-heading span {
    color: #d982a5;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 3px;
}

.page-heading h1 {
    color: #444;
    font-size: 38px;
    margin: 8px 0;
}

.page-heading p {
    color: #777;
}

.messages-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.message-card {
    background: white;
    border: 1px solid #f1dce4;
    border-radius: 18px;
    padding: 25px;
    box-shadow: 0 5px 18px rgba(210, 130, 165, 0.08);
}

.message-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    padding-bottom: 18px;
    border-bottom: 1px solid #f3dce4;
}

.message-label {
    display: block;
    color: #d982a5;
    font-size: 11px;
    font-weight: bold;
    letter-spacing: 2px;
    margin-bottom: 5px;
}

.message-header h2 {
    margin: 0;
    color: #444;
    font-size: 18px;
}

.message-date {
    color: #999;
    font-size: 13px;
}

.message-content {
    padding-top: 18px;
}

.message-content p {
    color: #666;
    line-height: 1.7;
    margin: 8px 0 0;
    white-space: pre-line;
}

.empty-message {
    background: white;
    border: 1px solid #f1dce4;
    border-radius: 18px;
    padding: 40px;
    text-align: center;
}

.empty-message h2 {
    color: #d46f97;
}

.empty-message p {
    color: #777;
}

</style>

@endsection