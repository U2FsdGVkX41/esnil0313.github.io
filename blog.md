---
layout: blogframe
published: true
title: Blog
order: 3
---
  <ul>
    {% for post in site.posts %}
      <li>
        <a class="post-title" href="#" data-url={{ post.url }} onclick="openBlog(this)">{{post.stamp}} | {{ post.title }}</a>
      </li>
    {% endfor %}
  </ul>
