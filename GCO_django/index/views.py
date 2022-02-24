from django.shortcuts import render
from django.views import View
from .models import *

class index(View):
    def get(self,request,url=""):
        cirugiasquery = Cirugias.objects.all()
        serviciosquery = Servicios.objects.all()
        equiposquery = Equipo.objects.all()
        padquery = Padecimientos.objects.all()
        return render(request,"index/index.html",{'cirugiasquery':cirugiasquery,
            'serviciosquery':serviciosquery,
            'equipoquery':equiposquery,
            'padquery':padquery,
            'url':url,
        })

#class index2(View):
#    def get()