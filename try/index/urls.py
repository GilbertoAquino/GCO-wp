from django.conf.urls import url
from .views import *
urlpatterns=[url("",index.as_view()),
             url("<str:url>",index.as_view()),
             url("cirugias/<str:url>",cirugias_blog.as_view()),
             url("cirugias/cirugias/<str:url>",redirects)]