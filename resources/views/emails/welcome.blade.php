@component('mail::message')
# Introduction

Hey there! 

Thank you for signing up for a meet2coffee.com service. 

Based on what you have wrote in the description, we assigned you to “Innovation Sciences” group. Creating a culture of innovation is one of society’s greatest challenges. Innovation creates new opportunities that lead to sustainable economic growth and can help tackle serious societal problems. The group consists of Munich next-generation scientists, engineers, and PhD/M.Sc/B.Sc students, committed to engaging in collaborations related to collectively identified issues.

 We will match you every week with one of the group members. You will receive an email with a name and email of your partner. Please don’t wait and write your partner to schedule a zoom call. Don’t be shy! All of the members are very friendly :)

After each week we will ask about how the meeting was to improve your matching experience. 


Nice to have you onboard!

@component('mail::button', ['url' => 'https://meet2coffee.com'])
Go to Meet2Coffee!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
