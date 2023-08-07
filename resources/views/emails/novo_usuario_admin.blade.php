@component('mail::message')
# Novo registro no site

Um novo usuário se registrou no site:

- Nome: {{ $usuario->nome }}
- E-mail: {{ $usuario->email }}

Cumprimentos,
A equipe do nosso site
@endcomponent

