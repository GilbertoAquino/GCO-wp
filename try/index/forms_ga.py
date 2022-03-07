# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from distutils.log import error
from django import forms

class contactoForm(forms.Form):
    Nombre = forms.CharField(max_length=50,widget=forms.TextInput(attrs={'placeholder': 'Nombre','class':'me-1'}))
    Apellidos = forms.CharField(max_length=50,widget=forms.TextInput(attrs={'placeholder': 'Apellido'}))
    Email = forms.EmailField(widget=forms.TextInput(attrs={'placeholder': 'Correo electronico'}))
    Telefono = forms.IntegerField(widget=forms.TextInput(attrs={'placeholder': 'Telefono'}))
    Mensaje = forms.CharField(widget=forms.Textarea(attrs={'placeholder':'Escribe tu mensaje...','rows':5}))    
    