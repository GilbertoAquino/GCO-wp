from django.contrib import admin
from .models import *

class urlAdmin(admin.ModelAdmin):
    prepopulated_fields={"url":("titulo",)}


admin.site.register(Cirugias,urlAdmin)
admin.site.register(Padecimientos)
admin.site.register(Equipo)
admin.site.register(Servicios)
admin.site.register(Carrusel)