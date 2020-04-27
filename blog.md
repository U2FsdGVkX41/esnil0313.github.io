---
layout: default
published: true
title: Blog
order: 3
---
<body>
  <ul>
    {% for post in site.posts %}
      <li>
        <a class="post-title" href="{{ post.url }}">{{post.stamp}} | {{ post.title }}</a>
      </li>
    {% endfor %}
  </ul>
<body>
