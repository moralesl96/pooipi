#ifndef GAMEOBJECT_H_INCLUDED
#define GAMEOBJECT_H_INCLUDED

#include "TextureManager2.h"

class GameObject
{
public:
 virtual void load(int x, int y, int width, int height, std::string textureID) = 0;
 virtual void draw(SDL_Renderer *pRenderer, TextureManager *pTexture);
 virtual void update();
 virtual void update_enemy();
 virtual void clean() {};
 int getX() { return m_x; }
 int getY() { return m_y; }
 int getWidth() { return m_width; }
 int getHeight() { return m_height; }
 std::string get_id() {return m_textureID;}

protected:
 std::string m_textureID;
 int m_currentFrame;
 int m_currentRow;
 int m_x;
 int m_y;
 int m_width;
 int m_height;
};

#endif // GAMEOBJECT_H_INCLUDED
