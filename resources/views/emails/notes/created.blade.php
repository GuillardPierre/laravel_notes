<p>Bonjour {{ $note->user->name }},</p>

<p>Votre note a bien été créée.</p>

<p><strong>Titre :</strong> {{ $note->title }}</p>
<p><strong>Contenu :</strong></p>
<p>{{ $note->content }}</p>

<p>Cordialement,</p>
<p>{{ config('app.name') }}</p>