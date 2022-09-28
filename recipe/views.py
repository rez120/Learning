from rest_framework import viewsets, mixins

from rest_framework.authentication import TokenAuthentication

from rest_framework.permissions import IsAuthenticated

from core.models import Recipe, User, Tag
from recipe import serializers


class RecipeViewSet(viewsets.ModelViewSet):
    serializer_class = serializers.RecipeDetailSerializer
    queryset = Recipe.objects.all()
    authentication_classes = [TokenAuthentication]
    permission_classes = [IsAuthenticated]
    
    
    def get_queryset(self):
        return self.queryset.filter(user = self.request.user).order_by('-id')
    
    
    def get_serializer_class(self):
        if self.action == 'list':
            return serializers.RecipeSerializer
        return self.serializer_class
    
    def perform_create(self, serializer):
        serializer.save(user = self.request.user)



# put mixins before generic viewsets
class TagViewSet(
                mixins.DestroyModelMixin,
                mixins.UpdateModelMixin, 
                mixins.ListModelMixin, 
                viewsets.GenericViewSet):
    serializer_class =  serializers.TagSerializer
    queryset = Tag.objects.all()
    authentication_classes  = [TokenAuthentication]
    permission_classes = [IsAuthenticated]
    
    
    # we overwrite the prev one to list only auth user's tags, in default it lists them all
    def get_queryset(self):
        return self.queryset.filter(user = self.request.user).order_by('-name')
    

    
    
    
    
           