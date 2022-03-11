"""try URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/1.11/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.conf.urls import url, include
    2. Add a URL to urlpatterns:  url(r'^blog/', include('blog.urls'))
"""
from django.conf.urls import url, include
from django.contrib import admin
from django.conf.urls.static import static
from . import settings
from index.views import *

urlpatterns = [
    url(r'^admin/', admin.site.urls),
    url("cirugias/cirugias/(?P<url>.*)$",redirects),
    url("padecimientos/padecimientos/(?P<url>.*)$",redirects),
    url("padecimientos/cirugias/(?P<url>.*)$",redirects),
    url("cirugias/padecimientos/(?P<url>.*)$",redirects),
    url(r"^cirugias/(?P<url>.*)$",cirugias_blog.as_view(),name="cirugias_bg"),
    url(r"^padecimientos/(?P<url>.*)$",pad_blog.as_view(),name="pad_bg"),
    url(r"(?P<url>.*)$",index.as_view()),
    url(r'^$',index.as_view()),
] + static(settings.MEDIA_URL, document_root = settings.MEDIA_ROOT)