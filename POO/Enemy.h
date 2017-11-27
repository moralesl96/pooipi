#ifndef ENEMY_H_INCLUDED
#define ENEMY_H_INCLUDED

#include "GameObject.h"
#include <vector>

class Enemy : public GameObject
{
public:
 void load(int x, int y, int width, int height, std::string textureID);
 void update(std::string id);
 void clean() {};
 int getX() {return m_x;}
 int getY() {return m_y;}
private:
    int flag=1;
    std::string id;
    //Bullets *e_bullet;
};

#endif // ENEMY_H_INCLUDED
