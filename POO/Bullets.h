#ifndef BULLETS_H_INCLUDED
#define BULLETS_H_INCLUDED

#include "GameObject.h"

class Bullets : public GameObject
{
public:
 void load(int x, int y, int width, int height, std::string textureID);
 void update();
 void update_enemy();
 void moving(int x, int y);
 void clean() {};
};

#endif // BULLETS_H_INCLUDED
